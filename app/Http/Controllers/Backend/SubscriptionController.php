<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Messages as crudModel;
use App\Models\Subscriptione;
use DataTables;
use Exception;
use DB;
use Illuminate\Support\Arr;

class SubscriptionController extends Controller
{
    public function __construct() {
        $this->name = 'subscription';
        $this->view = 'backend.'.$this->name;
        $this->rules = [            
            //使用多語系        
            'title' => ['required', 'string'],
            'content' => ['nullable', 'string'],
            //公用
            //通用
            'lang' => ['required'],
        ];
        $this->messages = []; 
        $this->attributes = Arr::dot(__("backend.{$this->name}"));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('read '.$this->name);
        if ($request->ajax()) {
            $data = CrudModel::query()->with(['language']);
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
            $emails = Subscriptione::where('lang',$request->lang)->get();
            $validatedData['emails'] = implode(",",$emails->pluck('email')->toArray());
            $data = CrudModel::create($validatedData);

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
    public function show(Request $request,$id)
    {
        $data['info'] = CrudModel::findOrFail($id);
        if($request->show) {
            return view('front.emails.Replay', ['content'=>$data['info']->content]);
        }
        return view($this->view.'.show',$data);
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
        //
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
