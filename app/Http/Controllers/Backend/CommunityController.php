<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Community as crudModel;
use DataTables;
use Exception;
use DB;
use Illuminate\Support\Arr;

class CommunityController extends Controller
{
    public function __construct() {
        $this->name = 'communities';
        $this->view = 'backend.'.$this->name;
        $this->rules = [
            'facebook' => ['nullable', 'array'],
            'facebook.*' => ['nullable', 'string'],
            'instagram' => ['nullable', 'array'],
            'instagram.*' => ['nullable', 'string'],
            'youtube' => ['nullable', 'array'],
            'youtube.*' => ['nullable', 'string'],
        ];
        $this->messages = []; 
        $this->attributes = Arr::dot(__("backend.{$this->name}")); 
    }

    public function index(Request $request)
    {
        $data = crudModel::where([ 'id' => '1' ])->first();
        return view($this->view.'.edit',compact('data'));
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
            
            $data = CrudModel::updateOrCreate([ 'id' => '1' ], $validatedData);

            DB::commit();
            return response()->json(['message' => __('create').__('success')]);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()],422);
        }
    }
}