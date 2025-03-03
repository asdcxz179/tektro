<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Arr;

class Product extends Model implements Auditable
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
        'name',
        'description',
        'content',
        'details',
        'technology',
        'test_reviews',
        'related_products',
        'attribute',
        'keyword',
        'banner',
        'dealer_link',
        'sort',
        'status',  
        'new',  
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
        'keyword',
        'dealer_link',
    ];

    public function product_images(){
        return $this->hasMany(ProductImage::class)->orderBy('sort')->orderBy('id');
    }   

    public function files(){
        return $this->hasMany(ProductFile::class, 'product_id', 'id')->whereNotNull('path')->orderby('sort','asc');
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

    public function product_relevants()
    {
        return $this->morphedByMany(Product::class, 'model', 'product_relations');
    }

    public function transformAudit(array $data): array
    {
        if (Arr::has($data, 'new_values.product_categories')) {
            $data['old_values']['product_categories'] = implode("|",collect($this->auditCustomOld['product_categories'])->pluck("name.zh-Hant")->toArray());
            $data['new_values']['product_categories'] = implode("|",$this->getAttribute('product_categories')->pluck('name')->toArray());
        }
        if (Arr::has($data, 'new_values.product_icons')) {
            $data['old_values']['product_icons'] = implode("|",collect($this->auditCustomOld['product_icons'])->pluck("name.zh-Hant")->toArray());
            $data['new_values']['product_icons'] = implode("|",$this->getAttribute('product_icons')->pluck('name')->toArray());
        }

        if (Arr::has($data, 'new_values.product_tags')) {
            $data['old_values']['product_tags'] = implode("|",collect($this->auditCustomOld['product_tags'])->pluck("name.zh-Hant")->toArray());
            $data['new_values']['product_tags'] = implode("|",$this->getAttribute('product_tags')->pluck('name')->toArray());
        }
        if (Arr::has($data, 'new_values.product_relevants')) {
            $data['old_values']['product_relevants'] = implode("|",collect($this->auditCustomOld['product_relevants'])->pluck("name.zh-Hant")->toArray());
            $data['new_values']['product_relevants'] = implode("|",$this->getAttribute('product_relevants')->pluck('name')->toArray());
        }

        return $data;
    }
}
