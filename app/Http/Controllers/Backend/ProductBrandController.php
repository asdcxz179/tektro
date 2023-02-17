<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductBrand as crudModel;
use DataTables;
use Exception;
use DB;
use Illuminate\Support\Arr;

class ProductBrandController extends Controller
{
    public function __construct() {
        $this->name = 'product_brands';
        $this->view = 'backend.'.$this->name;
        $this->rules = [    
            //使用多語系        
            'name.*' => ['nullable', 'string', 'max:100'],
            'advertise_title.*' => ['nullable', 'string', 'max:100'],
            'advertise_subtitle.*' => ['nullable', 'string', 'max:255'],
            'below_advertise_title.*' => ['nullable', 'string', 'max:100'],
            'below_advertise_subtitle.*' => ['nullable', 'string', 'max:255'],
            //公用
            'banner' => ['nullable', 'string'],
            'advertise_image' => ['nullable', 'string'],
            'advertise_link' => ['nullable', 'string', 'max:255'],
            'below_advertise_image' => ['nullable', 'string'],
            'below_advertise_switch' => ['nullable', 'string', 'max:100'],
            'below_advertise_link' => ['nullable', 'string', 'max:255'],
            'file' => ['nullable', 'string'],
            'file_exist' => ['nullable', 'string'],
            //通用
            'sort' => ['required', 'numeric', 'max:127'],
            'status' => ['required', 'boolean'],        
        ];
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

            if(isset($validatedData['file'])){
                $validatedData = array_merge($validatedData, $this->dealfile($validatedData['file'], 'file'));
                $validatedData['file_data_name'] = $validatedData['file_name'];
            }else{
                unset($validatedData['file']);
            }

            $data = CrudModel::create(array_merge($validatedData, 
                $this->dealfile($validatedData['banner'], 'banner'),
                $this->dealfile($validatedData['advertise_image'], 'advertise_image'),
                $this->dealfile($validatedData['below_advertise_image'], 'below_advertise_image'),
            ));

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

            if(isset($validatedData['file'])){
                $validatedData = array_merge($validatedData, $this->dealfile($validatedData['file'], 'file', $data, 'file'));
                $validatedData['file_data_name'] = $validatedData['file_name'];
            }else{
                if(!isset($validatedData['file_exist'])) {
                    $validatedData['file'] = '';
                    $validatedData['file_data_name'] = '';
                }
                unset($validatedData['file']);
            }

            $data->update(array_merge($validatedData, 
                $this->dealfile($validatedData['banner'], 'banner', $data, 'banner'),
                $this->dealfile($validatedData['advertise_image'], 'advertise_image', $data, 'advertise_image'),
                $this->dealfile($validatedData['below_advertise_image'], 'below_advertise_image', $data, 'below_advertise_image'),                              
            ));

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
