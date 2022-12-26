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
    ];

    public function product_images(){
        return $this->hasMany(ProductImage::class);
    }   

    public function product_files(){
        return $this->hasMany(ProductFile::class);
    } 
}
