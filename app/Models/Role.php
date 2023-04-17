<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as RoleParent;
use OwenIt\Auditing\Contracts\Auditable;

class Role extends RoleParent implements Auditable
{
    // use \App\Traits\ObserverTrait;
    use \OwenIt\Auditing\Auditable;
    
    use HasFactory;

    protected $fillable = [
        'name',
        'guard_name',
    ];

    protected $auditExclude = [
        'guard_name',
    ];

    protected $casts = [
        'name' => 'string',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];    

    public static $audit = [
        //要紀錄欄位
        'only' => [
            'name',           
        ],
        //多對多
        'many' => [
            'permissions' => 'name'
        ]         
    ];    
}
