<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Support as crudModel;
use App\Models\SupportFileType;
use DataTables;
use Exception;
use DB;
use Illuminate\Support\Arr;

class SupportController extends Controller
{
    public function __construct() {
        $this->name = 'supports';
        $this->view = 'backend.'.$this->name;
        $this->rules = [            
            //使用多語系        
            'name.*' => ['nullable', 'string', 'max:100'],
            //公用
            //通用
            'sort' => ['required', 'numeric', 'max:127'],
            'status' => ['required', 'boolean'],     
            //分類
            'support_category_id' => ['nullable', 'string'],
        ];
        $support_files_type_data = SupportFileType::all();
        foreach($support_files_type_data as $type){
            //檔案
            $this->rules['support_files'.$type->key] = ['nullable', 'array'];
            $this->rules['support_files'.$type->key.'.*.id'] = ['nullable'];
            $this->rules['support_files'.$type->key.'.*.name.*'] = ['nullable', 'string', 'max:100'];
            $this->rules['support_files'.$type->key.'.*.path'] = ['nullable'];
            $this->rules['support_files'.$type->key.'.*.sort'] = ['nullable', 'numeric', 'max:127'];
        }

        $this->messages = []; 
        $this->attributes = Arr::dot(__("backend.{$this->name}"));
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
        return view($this->view.'.create')->with('support_files_type_data', SupportFileType::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set("memory_limit","800M");
        $this->authorize('create '.$this->name);
        $validatedData = $request->validate($this->rules, $this->messages, $this->attributes);

        try{
            DB::beginTransaction();

            $data = CrudModel::create($validatedData);

            $support_files_type_data = SupportFileType::all();
            foreach($support_files_type_data as $type){
                $relation = 'support_files';
                if(isset($validatedData[$relation.$type->key])) {
                    foreach($validatedData[$relation.$type->key] as &$value){
                        if($value['path']){
                            $value = array_merge($value, $this->dealfile($value['path'], 'path'));
                        }else{
                            unset($value['path']);
                        }
                        $value['support_file_type_id'] = $type->id;
                    }
                    $data->{$relation}()->hasManySyncable($data, $relation, $validatedData[$relation.$type->key], [], ['support_file_type_id' => $type->id]);      
                }else{
                    $data->{$relation}()->hasManySyncable($data, $relation, [], [], ['support_file_type_id' => $type->id]);
                }        
            }            ;
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
        return view($this->view.'.edit',compact('data'))->with('support_files_type_data', SupportFileType::all());
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
        ini_set("memory_limit","800M");
        $this->authorize('edit '.$this->name);
        $validatedData = $request->validate($this->rules, $this->messages, $this->attributes);
        
        try{
            DB::beginTransaction();

            $data = CrudModel::findOrFail($id);
            $data->update($validatedData);

            $support_files_type_data = SupportFileType::all();
            foreach($support_files_type_data as $type){
                $relation = 'support_files';
                if(isset($validatedData[$relation.$type->key])) {
                    foreach($validatedData[$relation.$type->key] as &$value){
                        if($value['path']){
                            $value = array_merge($value, $this->dealfile($value['path'], 'path'));
                        }else{
                            unset($value['path']);
                        }
                        $value['support_file_type_id'] = $type->id;
                    }
                    $data->{$relation}()->hasManySyncable($data, $relation, $validatedData[$relation.$type->key], [], ['support_file_type_id' => $type->id]);      
                }else{
                    $data->{$relation}()->hasManySyncable($data, $relation, [], [], ['support_file_type_id' => $type->id]);
                }
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
        $validatedData = $request->validate(['status' => ['required', 'boolean']], [], ['status' => __('status'),]);
        
        try{
            $data = CrudModel::findOrFail($id);
            $data->update($validatedData);
            return response()->json(['message' => __('edit').__('success')]);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()],422);
        }
    }          
}
