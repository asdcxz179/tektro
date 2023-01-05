<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $fillable = [
        'emails',
        'lang',
        'title',
        'content',
        'status',
    ];

    public function language(){
        return $this->hasOne(Language::class,'lang','lang');
    }   
}
