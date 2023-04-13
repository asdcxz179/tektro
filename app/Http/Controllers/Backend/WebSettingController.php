<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebSetting as crudModel;
use Illuminate\Support\Arr;
use DataTables;
use Exception;

class WebSettingController extends Controller
{
    public function __construct() {
        $this->name = 'web_setting';
        $this->view = 'backend.'.$this->name;
        $this->rules = [            
            //使用多語系        
            'title.*' => ['nullable', 'string'],
            'keyword.*' => ['nullable', 'string'],
            'description.*' => ['nullable', 'string'],
            'author.*' => ['nullable', 'string'],
            'copyright.*' => ['nullable', 'string'],
            //公用
        ];
        $this->messages = []; 
        $this->attributes = Arr::dot(__("backend.{$this->name}"));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('edit '.$this->name);
        $data = CrudModel::findOrFail(1);
        return view($this->view.'.edit',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            $data = CrudModel::findOrFail(1);
            $data->update($validatedData);
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
        //
    }
}
