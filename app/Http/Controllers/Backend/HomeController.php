<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home as crudModel;
use App\Models\HomeType;
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
            'home_type_id' => ['required', 'numeric', 'max:6'],
            //通用
            'sort' => ['required', 'numeric', 'max:127'],
            'status' => ['required', 'boolean'],    

            //使用多語系        
            'relation.*.big_title.*' => ['nullable', 'string', 'max:100'],
            'relation.*.small_title.*' => ['nullable', 'string', 'max:100'],
            'relation.*.title.*' => ['nullable', 'string', 'max:100'],
            //公用
            'relation.*.id' => ['nullable'],
            'relation.*.youtube_key' => ['nullable', 'string'],
            'relation.*.path' => ['nullable', 'string'],
            'relation.*.link' => ['nullable', 'string'],
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
        return view($this->view.'.create')->with(['types' => $this->types]);
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

            $data = CrudModel::create($validatedData);
            foreach($validatedData['relation'] as &$value){
                if(isset($value['path'])){
                    $value = array_merge($value, $this->dealfile($value['path'], 'path'));
                }
            }               
            $data->{$data->home_type->relation}()->hasManySyncable($data, $data->home_type->relation, $validatedData['relation']);

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

        return view($this->view.'.edit',compact('data'))->with(['types' => $this->types]);
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

            $data->update($validatedData);        
            foreach($validatedData['relation'] as &$value){
                if(isset($value['path'])){
                    $value = array_merge($value, $this->dealfile($value['path'], 'path'));
                }
            }                
            $data->{$data->home_type->relation}()->hasManySyncable($data, $data->home_type->relation, $validatedData['relation']);

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
