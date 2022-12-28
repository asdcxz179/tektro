<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area as crudModel;
use DataTables;
use Exception;
use DB;
use Illuminate\Support\Arr;

class AreaController extends Controller
{

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
