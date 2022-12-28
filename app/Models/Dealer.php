<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;
    use \Spatie\Translatable\HasTranslations;
    
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
}
