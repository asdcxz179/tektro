<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Arr;

class Dealer extends Model implements Auditable
{
    use HasFactory;
    use \Spatie\Translatable\HasTranslations;
    use \OwenIt\Auditing\Auditable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country',
        'company',

        'phone',
        'email',
        'website',

        'sort',
        'status',  
    ];    

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public $translatable = [
        'country',
        'company',
    ];

    public function areas()
    {
        return $this->morphedByMany(Area::class, 'model', 'dealer_relations');
    } 

    public function product_brands()
    {
        return $this->morphedByMany(ProductBrand::class, 'model', 'dealer_relations');
    }

    public function transformAudit(array $data): array
    {
        if (Arr::has($data, 'new_values.product_brands')) {
            $data['old_values']['product_brands'] = implode("|",collect($this->auditCustomOld['product_brands'])->pluck("name.zh-Hant")->toArray());
            $data['new_values']['product_brands'] = implode("|",$this->getAttribute('product_brands')->pluck('name')->toArray());
        }

        if (Arr::has($data, 'new_values.areas')) {
            $data['old_values']['areas'] = implode("|",collect($this->auditCustomOld['areas'])->pluck("name.zh-Hant")->toArray());
            $data['new_values']['areas'] = implode("|",$this->getAttribute('areas')->pluck('name')->toArray());
        }
        return $data;
    }

}
