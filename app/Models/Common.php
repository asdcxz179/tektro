<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Arr;

class Common extends Model implements Auditable
{
    use HasFactory;
    use \Spatie\Translatable\HasTranslations;
    use \OwenIt\Auditing\Auditable;

    protected $auditExclude = [
        'product_brand_id',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'content',

        'sort',
        'status',
    ];    

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public $translatable = [
        'name',
        'content',
    ];

    public function product_brands()
    {
        return $this->morphToMany(ProductBrand::class, 'model', 'product_brand_relations');
    }  

    public function transformAudit(array $data): array
    {
        if (Arr::has($data, 'new_values.product_brands')) {
            $data['old_values']['product_brands'] = implode("|",collect($this->auditCustomOld['product_brands'])->pluck("name.zh-Hant")->toArray());
            $data['new_values']['product_brands'] = implode("|",$this->getAttribute('product_brands')->pluck('name')->toArray());
        }

        return $data;
    }
}
