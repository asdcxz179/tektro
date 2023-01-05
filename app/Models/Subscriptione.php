<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptione extends Model
{
    use HasFactory;
    protected $table = 'subscriptione';
    protected $fillable = [
        'email',
        'lang',
    ];
}
