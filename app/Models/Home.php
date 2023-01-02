<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    // use \Spatie\Translatable\HasTranslations;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'home_type_id',

        'sort',
        'status',  
    ];    

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function home_type(){
        return $this->belongsTo(HomeType::class);
    }

    public function home_carousels(){
        return $this->hasMany(HomeCarousel::class);
    } 

    public function home_news(){
        return $this->hasMany(HomeNews::class);
    } 

    public function home_videos(){
        return $this->hasMany(HomeVideo::class);
    } 

    public function home_webs(){
        return $this->hasMany(HomeWeb::class);
    } 

    public function home_brands(){
        return $this->hasMany(HomeBrand::class);
    } 

    public function home_images(){
        return $this->hasMany(HomeImage::class);
    } 
}
