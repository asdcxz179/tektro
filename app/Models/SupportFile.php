<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Arr;

class SupportFile extends Model implements Auditable
{
    use HasFactory;
    use \Spatie\Translatable\HasTranslations;
    use \App\Traits\ModelShareTrait;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'support_id',
        'support_file_type_id',
        'name',
        'file_name',
        // 'path',
        'sort',
        'keyword',
        'show',
    ];    

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $auditExclude = [
        'support_file_type_id',
    ];

    public $translatable = [
        'name',
        'keyword',
        'show',
    ];

    public function transformAudit(array $data): array
    {
        if (Arr::has($data, 'new_values.support_file_type_id')) {
            $data['old_values']['support_file_type_name'] = SupportFileType::find($this->getAttribute('support_file_type_id'))->name;
            $data['new_values']['support_file_type_name'] = SupportFileType::find($this->getAttribute('support_file_type_id'))->name;
        }
        return $data;
    }

    public function files() {
        return $this->hasMany(SupportItemFile::class, 'support_files_id', 'id');
    }
}
