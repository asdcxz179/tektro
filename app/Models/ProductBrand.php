<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
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
}
