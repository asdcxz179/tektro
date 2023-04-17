<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Seo extends Model implements Auditable
{
    use HasFactory;
    use \Spatie\Translatable\HasTranslations;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'seo';
    public $show_name = '關鍵字管理';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'title',
        'keyword',
        'description',
    ];

    public $translatable = [
        'title',
        'keyword',
        'description',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function getNameAttribute($value) {
        $name = $value;
        switch ($value) {
            case 'video':
                $name = '影音分享';
                break;
            case 'support':
                $name = '技術手冊';
                break;
            case 'news':
                $name = '最新消息';
                break;
            case 'tektro_product':
                $name = 'Tektro產品';
                break;
            case 'trp_product':
                $name = 'Trp產品';
                break;
            case 'faq':
                $name = '常見問題';
                break;
            case 'about_4':
                $name = '創新價值';
                break;
            case 'warranty':
                $name = '保固條款';
                break;
            case 'contact':
                $name = '聯絡我們';
                break;
        }
        return $name;
    }
}
