<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product as crudModel;
use DataTables;
use Exception;
use DB;
use Illuminate\Support\Arr;
use App\Models\ProductBrand;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function __construct() {
        $this->name = 'products';
        $this->view = 'backend.'.$this->name;
        $this->rules = [            
            //使用多語系        
            'keyword.*' => ['nullable', 'string', 'max:100'],
            'name.*' => ['nullable', 'string', 'max:100'],
            'description.*' => ['nullable', 'string', 'max:100'],
            'content.*' => ['nullable', 'string'],
            'details.*' => ['nullable', 'string'],
            'technology.*' => ['nullable', 'string'],
            'test_reviews.*' => ['nullable', 'string'],
            'related_products.*' => ['nullable', 'string'],
            'attribute.*' => ['nullable', 'string'],
            //公用
            'banner' => ['nullable', 'string'],
            //通用
            'sort' => ['required', 'numeric'],
            'status' => ['required', 'boolean'],     
     
            //多選
            'product_categories' => ['nullable', 'array'],
            'product_tags' => ['nullable', 'array'],
            'product_special' => ['nullable', 'array'],
            'product_icons' => ['nullable', 'array'],

            //產品圖片
            'product_images' => ['nullable', 'array'],
            'product_images.*' => ['nullable', 'string'],
            //產品檔案
            'product_files' => ['nullable', 'array'],
            'product_files.*.id' => ['nullable'],
            'product_files.*.name.*' => ['nullable', 'string', 'max:100'],
            'product_files.*.path' => ['nullable'],
            'product_files.*.sort' => ['nullable', 'numeric'],
            
        ];
        $this->messages = []; 
        $this->attributes = [Arr::dot(__("backend.{$this->name}"))];
    }

    public function index(Request $request)
    {
        $this->authorize('read '.$this->name);
        if ($request->ajax()) {
            $data = CrudModel::with(['product_categories']);
            return Datatables::eloquent($data)->filter(function($query) use ($request){
                if($request->brand) {
                    $brand = $request->brand;
                    $query->whereHas('category',function($query) use ($brand){
                        $query->whereHas('brands',function($query) use ($brand) {
                            $query->where('product_brands.id',$brand);
                        });
                    });    
                }
                if($request->category) {
                    $category = $request->category;
                    $query->whereHas('category',function($query) use ($category){
                        $query->where('product_categories.id',$category);
                    });    
                }
            },true)->make(true);
        }
        $data['brands'] = ProductBrand::where(['status'=>1])->get();
        $categories = [];
        if(request('brand')) {
            $categories = $data['brands']->where('id',request('brand'))->first()->categories;
        }
        $data['categories'] = $categories;
        return view($this->view.'.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create '.$this->name);
        return view($this->view.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create '.$this->name);
        $validatedData = $request->validate($this->rules, $this->messages, $this->attributes);

        try{
            DB::beginTransaction();

            $data = CrudModel::create(array_merge($validatedData, 
                $this->dealfile($validatedData['banner'], 'banner'),
            ));

            $data->product_categories()->sync($validatedData['product_categories'] ?? []);
            $data->product_icons()->sync($validatedData['product_icons'] ?? []);
            $data->product_tags()->sync((array_merge($validatedData['product_tags'] ?? [], $validatedData['product_special'] ?? [])) ?? []);

            $relation = 'product_images';
            $data->{$relation}()->hasManySyncable($data, $relation, $this->dealfile($validatedData[$relation], 'path'));
            

            $relation = 'product_files';
            if(isset($validatedData[$relation])){
                foreach($validatedData[$relation] as &$value){
                    if(isset($value['path'])){
                        $value = array_merge($value, $this->dealfile($value['path'], 'path'));
                    }else{
                        unset($value['path']);
                    }                
                }

                $data->{$relation}()->createMany($validatedData[$relation]);
            }

            DB::commit();
            return response()->json(['message' => __('create').__('success')]);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage(), 'line' => $e->getLine()],422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('read '.$this->name);
        return CrudModel::findOrFail($id); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $this->authorize('edit '.$this->name);
        $data = CrudModel::findOrFail($id);
        return view($this->view.'.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('edit '.$this->name);
        $validatedData = $request->validate($this->rules, $this->messages, $this->attributes);
        
        try{
            DB::beginTransaction();

            $data = CrudModel::findOrFail($id);
            $data->update(array_merge($validatedData, 
                $this->dealfile($validatedData['banner'], 'banner', $data, 'banner'),           
            ));

            $data->product_categories()->sync($validatedData['product_categories'] ?? []);
            $data->product_icons()->sync($validatedData['product_icons'] ?? []);
            $data->product_tags()->sync((array_merge($validatedData['product_tags'] ?? [],$validatedData['product_special'] ?? [])) ?? []);

            $relation = 'product_images';
            $data->{$relation}()->hasManySyncable($data, $relation, $this->dealfile($validatedData[$relation], 'path'));

            $relation = 'product_files';
            if(isset($validatedData[$relation])){
                foreach($validatedData[$relation] as &$value){
                    if($value['path']){
                        $value = array_merge($value, $this->dealfile($value['path'], 'path'));
                    }else{
                        unset($value['path']);
                    }
                }
                $data->{$relation}()->hasManySyncable($data, $relation, $validatedData[$relation]);       
            }else{
                $data->{$relation}()->hasManySyncable($data, $relation, []);       
            }

            DB::commit();
            return response()->json(['message' => __('edit').__('success')]);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()],422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete '.$this->name);
        try{
            $data = CrudModel::findOrFail($id);
            $data->delete();
            return response()->json(['message' => __('delete').__('success')]);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()],422);
        }
    }
    
    /**
     * status  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        $this->authorize('edit '.$this->name);
        $validatedData = $request->validate([
            'status' => ['required', 'boolean'],
            'sort' => ['nullable', 'numeric'],
        ], [], [
            'status' => __('status'),
            'sort' => __('sort'),
        ]);
        
        try{
            $data = CrudModel::findOrFail($id);
            $data->update($validatedData);
            return response()->json(['message' => __('edit').__('success')]);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()],422);
        }
    }    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function select(Request $request)
    {
        if ($request->ajax()) {
            $data = CrudModel::where('name', 'like', "%{$request->search}%")
                ->select(['id', 'name'])
                ->limit(200)
                ->get();
            return $data;
        }
    }       
}
