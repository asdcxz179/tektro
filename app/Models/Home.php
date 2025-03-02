<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Arr;


class Home extends Model implements Auditable
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
        'home_type_id',
        'path',
        'sort',
        'status',
        'name',
    ];    

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public $translatable = [
        'name',
    ];

    public function home_type(){
        return $this->belongsTo(HomeType::class);
    }

    public function home_carousels(){
        return $this->hasMany(HomeCarousel::class)->orderby('sort');
    }

    public function home_news_carousels(){
        return $this->hasMany(HomeNewsCarousels::class)->orderby('sort');
    }

    public function home_products(){
        return $this->hasMany(HomeProduct::class)->orderby('sort');
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

    public function transformAudit(array $data): array
    {
        if (Arr::has($data, 'new_values.home_type_id')) {
            $data['new_values']['home_type_id'] = HomeType::find($this->getAttribute('home_type_id'))->name;
        }
        return $data;
    }
}
