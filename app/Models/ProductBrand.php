<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ProductBrand extends Model implements Auditable
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
        'advertise_title',
        'advertise_subtitle',
        'below_advertise_title',
        'below_advertise_subtitle',

        'banner',
        'advertise_image',
        'advertise_link',
        'below_advertise_image',
        'below_advertise_switch',
        'below_advertise_link',

        'file_data_name',
        'file',

        'sort',
        'status',
    ];    

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public $translatable = [
        'name',
        'advertise_title',
        'advertise_subtitle',
        'below_advertise_title',
        'below_advertise_subtitle',
    ];

    public function faqs()
    {
        return $this->morphedByMany(Common::class, 'model', 'product_brand_relations')->where('status',1)->orderby('sort','asc');
    }

    public function categories()
    {
        return $this->morphedByMany(ProductCategory::class, 'model', 'product_brand_relations')->where('status',1)->orderby('sort','asc');
    } 

    public function tags()
    {
        return $this->morphedByMany(ProductTag::class, 'model', 'product_brand_relations')->where('status',1)->orderby('sort','asc');
    }   

    public function product_categories()
    {
        return $this->morphedByMany(ProductCategory::class, 'model', 'product_brand_relations');
    } 

    public function product_tags()
    {
        return $this->morphedByMany(ProductTag::class, 'model', 'product_relations');
    }     

    public function getCodeAttribute() {
        $id = $this->id;
        switch ($this->id) {
            case 1:
                $id = 'Tektro';
                break;
            case 2:
                $id = 'Trp';
                break;
        }
        return $id;
    }
}
