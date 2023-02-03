<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
        'description',
        'content',
        'details',
        'technology',
        'test_reviews',
        'related_products',
        'attribute',

        'banner',

        'sort',
        'status',  
    ];    

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public $translatable = [
        'name',
        'description',
        'content',
        'details',
        'technology',
        'test_reviews',
        'related_products',
        'attribute',
    ];

    public function product_images(){
        return $this->hasMany(ProductImage::class);
    }   

    public function files(){
        return $this->hasMany(ProductFile::class)->whereNotNull('path')->orderby('sort','asc');
    } 

    public function product_files(){
        return $this->hasMany(ProductFile::class);
    } 

    public function category()
    {
        return $this->morphedByMany(ProductCategory::class, 'model', 'product_relations')->where('status',1);
    } 

    public function product_categories()
    {
        return $this->morphedByMany(ProductCategory::class, 'model', 'product_relations');
    } 

    public function product_icons()
    {
        return $this->morphedByMany(ProductIcon::class, 'model', 'product_relations');
    } 


    public function product_tags()
    {
        return $this->morphedByMany(ProductTag::class, 'model', 'product_relations');
    } 
}
