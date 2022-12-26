<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductKeyword extends Model
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

        'sort',
        'status',
    ];    

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public $translatable = ['name'];

    public function products()
    {
        return $this->morphToMany(Product::class, 'model', 'product_relations');
    }       
}
