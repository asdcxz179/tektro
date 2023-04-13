<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Messages extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
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
