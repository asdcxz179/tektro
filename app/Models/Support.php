<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;
    use \Spatie\Translatable\HasTranslations;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'support_category_id',
        'name',
        
        'sort',
        'status',  
    ];    

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public $translatable = [
        'name',
    ];


    public function support_category(){
        return $this->belongsTo(SupportCategory::class);
    }    
    
    public function support_files(){
        return $this->hasMany(SupportFile::class)->orderby('sort','asc');
    } 
}
