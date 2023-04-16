<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

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

    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    } 
}
