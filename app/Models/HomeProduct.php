<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Arr;

class HomeProduct extends Model implements Auditable
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
        'home_id',
        'big_title',
        'small_title',
        'button_link',
        'path',
        'type',
        'product_id',
        'sort',
    ];    

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public $translatable = [
        'big_title',
        'small_title',
        'button_link',
    ];

    public function transformAudit(array $data): array
    {
        if (Arr::has($data, 'new_values.product_id') && $this->getAttribute('product_id')) {
            if($this->getOriginal('product_id')) {
                $data['old_values']['product_name'] = Product::find($this->getOriginal('product_id'))->name;
            }
            $data['new_values']['product_name'] = Product::find($this->getAttribute('product_id'))->name;
        }

        return $data;
    }

    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    } 
}
