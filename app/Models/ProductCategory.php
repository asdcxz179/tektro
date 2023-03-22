<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    use \Spatie\Translatable\HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'path',

        'sort',
        'status',
    ];    

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public $translatable = ['name'];

    public function brands()
    {
        return $this->morphToMany(ProductBrand::class, 'model', 'product_brand_relations')->where('status',1);
    }   

    public function product_brands()
    {
        return $this->morphToMany(ProductBrand::class, 'model', 'product_brand_relations');
    }   
    
    public function product()
    {
        return $this->morphToMany(Product::class, 'model', 'product_relations');
    }   

    public function products()
    {
        return $this->morphToMany(Product::class, 'model', 'product_relations')->where('status',1)->orderby('new','desc')->orderby('sort','asc');
    }
}
