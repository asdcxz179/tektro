<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product as crudModel;
use DataTables;
use Exception;
use DB;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    public function __construct() {
        $this->name = 'products';
        $this->view = 'backend.'.$this->name;
        $this->rules = [            
            //使用多語系        
            'name.*' => ['nullable', 'string', 'max:100'],
            'description.*' => ['nullable', 'string', 'max:100'],
            'content.*' => ['nullable', 'string'],
            'details.*' => ['nullable', 'string'],
            'technology.*' => ['nullable', 'string'],
            'test_reviews.*' => ['nullable', 'string'],
            'related_products.*' => ['nullable', 'string'],
            //公用
            'banner' => ['nullable', 'string'],
            //通用
            'sort' => ['required', 'numeric', 'max:127'],
            'status' => ['required', 'boolean'],     
     
            //多選
            'product_categories' => ['nullable', 'array'],
            'product_tags' => ['nullable', 'array'],

            //產品圖片
            'product_images' => ['nullable', 'array'],
            'product_images.*' => ['nullable', 'string'],
            //產品檔案
            'product_files' => ['nullable', 'array'],
            'product_files.*.id' => ['nullable'],
            'product_files.*.name.*' => ['nullable', 'string', 'max:100'],
            'product_files.*.path' => ['nullable', 'string'],
            'product_files.*.sort' => ['nullable', 'numeric', 'max:127'],
            
        ];
        $this->messages = []; 
        $this->attributes = [Arr::dot(__("backend.{$this->name}"))];
    }

    public function index(Request $request)
    {
        $this->authorize('read '.$this->name);
        if ($request->ajax()) {
            $data = CrudModel::query();
            return Datatables::eloquent($data)
                ->make(true);
        }
        return view($this->view.'.index');
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
            $data->product_tags()->sync($validatedData['product_tags'] ?? []);

            $relation = 'product_images';
            $data->{$relation}()->hasManySyncable($data, $relation, $this->dealfile($validatedData[$relation], 'path'));

            $relation = 'product_files';
            foreach($validatedData[$relation] as &$value){
                $value = array_merge($value, $this->dealfile($value['path'], 'path'));
            }
            $data->{$relation}()->hasManySyncable($data, $relation, $validatedData[$relation]);


            DB::commit();
            return response()->json(['message' => __('create').__('success')]);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()],422);
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
            $data->product_tags()->sync($validatedData['product_tags'] ?? []);

            $relation = 'product_images';
            $data->{$relation}()->hasManySyncable($data, $relation, $this->dealfile($validatedData[$relation], 'path'));

            $relation = 'product_files';
            foreach($validatedData[$relation] as &$value){
                if($value['path']){
                    $value = array_merge($value, $this->dealfile($value['path'], 'path'));
                }else{
                    unset($value['path']);
                }
            }
            $data->{$relation}()->hasManySyncable($data, $relation, $validatedData[$relation]);         

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
        $validatedData = $request->validate(['status' => ['required', 'boolean']], [], ['status' => __('status'),]);
        
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
