<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home as crudModel;
use App\Models\HomeType;
use App\Models\Product;
use DataTables;
use Exception;
use DB;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function __construct() {
        $this->name = 'homes';
        $this->view = 'backend.'.$this->name;
        $this->rules = [       
            //分類
            'home_type_id' => ['required', 'numeric', 'max:8'],
            //通用
            'sort' => ['nullable', 'numeric', 'max:127'],
            'status' => ['required', 'boolean'],
            'path' => ['nullable'],

            //使用多語系        
            'relation.*.big_title.*' => ['nullable', 'string'],
            'relation.*.small_title.*' => ['nullable', 'string'],
            'relation.*.title.*' => ['nullable', 'string'],
            'relation.*.button_link.*' => ['nullable', 'string'],
            //公用
            'relation.*.id' => ['nullable'],
            'relation.*.youtube_key' => ['nullable', 'string'],
            'relation.*.path' => ['nullable'],
            'relation.*.link' => ['nullable', 'string'],
            'relation.*.type' => ['nullable', 'string'],
            'relation.*.id' => ['nullable', 'numeric'],
            'relation.*.product_id' => ['nullable', 'numeric'],
            //通用
            'relation.*.sort' => ['nullable', 'numeric', 'max:127'],          
        ];
        $this->messages = []; 
        $this->attributes = Arr::dot(__("backend.{$this->name}"));

        if(request()->home_type_id){
            $types = HomeType::find(request()->home_type_id);
            $this->view = 'backend.'.$types->relation;
        }

        $this->types = HomeType::all();
        $this->products = Product::where('status',1)->get();
    }

    public function index(Request $request)
    {
        $this->authorize('read '.$this->name);
        if ($request->ajax()) {
            $data = CrudModel::with('home_type');
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
        return view($this->view.'.create')->with(['types' => $this->types, 'products' => $this->products]);
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
            if(isset($validatedData['path'])){
                $validatedData = array_merge($validatedData, $this->dealfile($validatedData['path'], 'path'));
            }
            $data = CrudModel::create($validatedData);
            if(in_array($data->home_type_id, [1, 2, 4, 5, 6, 7, 8])) {
                $exists = [];
                foreach($validatedData['relation'] as &$value){
                    if(isset($value['path'])){
                        $value = array_merge($value, $this->dealfile($value['path'], 'path'));
                    }
                    $item = $data->{$data->home_type->relation}()->create($value);
                }
            }else {
                $data->update($validatedData);        
                foreach($validatedData['relation'] as &$value){
                    if(isset($value['path'])){
                        $value = array_merge($value, $this->dealfile($value['path'], 'path'));
                    }
                }
                $data->{$data->home_type->relation}()->hasManySyncable($data, $data->home_type->relation, $validatedData['relation']);
            }

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
        if(request()->home_type_id){
            $types = HomeType::find(request()->home_type_id);
            $data->relation = $data->{$types->relation};
        }

        return view($this->view.'.edit',compact('data'))->with(['types' => $this->types, 'products' => $this->products]);
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
        unset($this->rules['home_type_id']);
        $validatedData = $request->validate($this->rules, $this->messages, $this->attributes);
        
        try{
            DB::beginTransaction();
            $data = CrudModel::findOrFail($id);
            if(in_array($data->home_type_id, [1, 2, 4, 5, 6, 7, 8])) {
                $exists = [];
                foreach($validatedData['relation'] as &$value){
                    if(isset($value['id'])) {
                        $exists[] = $value['id'];
                        $item = $data->{$data->home_type->relation}()->where('id', $value['id'])->first();
                        if(isset($value['path']) && $item->path != 'upload/'.$value['path']->getClientOriginalName()) {
                            if(isset($value['path'])){
                                $value = array_merge($value, $this->dealfile($value['path'], 'path'));
                            }
                        }else {
                            unset($value['path']);
                        }
                        $item->update($value);
                    }else{
                        if(isset($value['path'])){
                            $value = array_merge($value, $this->dealfile($value['path'], 'path'));
                        }
                        $item = $data->{$data->home_type->relation}()->create($value);
                        $exists[] = $item->id;
                    }
                }
                foreach ($data->{$data->home_type->relation} as $key => $item) {
                    if(!in_array($item->id, $exists)) {
                        $item->delete();
                    }
                }
            }else {
                $data->update($validatedData);        
                foreach($validatedData['relation'] as &$value){
                    if(isset($value['path'])){
                        $value = array_merge($value, $this->dealfile($value['path'], 'path'));
                    }
                }
                $data->{$data->home_type->relation}()->hasManySyncable($data, $data->home_type->relation, $validatedData['relation']);
            }
            if(isset($validatedData['path'])  && $data->path != 'upload/'.$validatedData['path']->getClientOriginalName()){
                $validatedData = array_merge($validatedData, $this->dealfile($validatedData['path'], 'path'));
            }else{
                $validatedData['path'] = null;
            }
            $data->update($validatedData);

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
            'sort' => ['nullable', 'numeric', 'max:127'],
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
 
}
