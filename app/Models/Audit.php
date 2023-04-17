<?php

namespace App\Models;

use OwenIt\Auditing\Models\Audit as Model;

class Audit extends Model
{
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'old_values'   => 'json',
        'new_values'   => 'json',
    ];

    protected $appends = [
        'auditable_type_name',
    ];

    public function getEventAttribute($value) {
        switch ($value) {
            case 'created':
                return '新增';
                break;
            case 'updated':
                return '更新';
                break;
            case 'deleted':
                return '刪除';
                break;
            case 'sync':
                return '更新';
                break;
            
            default:
                return $value;
                break;
        }
    }

    public function getAuditableTypeNameAttribute($value) {
        $model = new $this->auditable_type();
        $table = $model->getTable();
        return __("backend.menu.{$table}");
    }
    
    public function getOldValuesAttribute($value) {
        $model = new $this->auditable_type();
        $table = $model->getTable();
        $data = json_decode($value,true);
        $output = [];
        foreach ($data as $key => $item) {
            $value = $item;
            $temp = $item;
            if(is_string($item)) {
                $temp = json_decode($item,true);
            }
            $name = __("backend.{$table}.{$key}");
            if(is_array($temp)) {
                $temp_data = [];
                foreach ($temp as $key2 => $value) {
                    $temp_name = __("backend.lang.{$key2}");
                    $temp_data[]  = "{$temp_name} : {$value}";
                }
                $value = implode(" | ",$temp_data);
                $name = __("backend.{$table}.*.{$key}");
            }
            $output[] = "{$name} => {$value}";
        }
        return $output;
    }

    public function getNewValuesAttribute($value) {
        $model = new $this->auditable_type();
        $table = $model->getTable();
        $data = json_decode($value,true);
        $output = [];
        foreach ($data as $key => $item) {
            $value = $item;
            $temp = json_decode($item,true);
            $name = __("backend.{$table}.{$key}");
            if(is_array($temp)) {
                $temp_data = [];
                foreach ($temp as $key2 => $value) {
                    $temp_name = __("backend.lang.{$key2}");
                    $temp_data[]  = "{$temp_name} : {$value}";
                }
                $value = implode(" | ",$temp_data);
                $name = __("backend.{$table}.*.{$key}");
            }
            $output[] = "{$name} => {$value}";
        }
        return $output;
    }
}
