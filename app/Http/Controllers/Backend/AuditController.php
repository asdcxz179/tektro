<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Audit as crudModel;
use DataTables;
use Exception;

class AuditController extends Controller
{

    public function __construct() {
        $this->name = 'audit';
        $this->view = 'backend.'.$this->name;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = CrudModel::with(['user','auditable'])->where('user_type',\App\Models\User::class)->where(function($query){
                $query->where('old_values','!=','[]')->orwhere('new_values','!=','[]');
            });
            return Datatables::eloquent($data)
                ->make(true);
        }
        return view($this->view.'.index');
    }
}
