<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Arr;

class SupportCategory extends Model implements Auditable
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
        'name',

        'sort',
        'status',
    ];    

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public $translatable = ['name'];

    protected $auditExclude = [
        'title',
        'keyword',
        'description',
    ];

    public function supports(){
        return $this->hasMany(Support::class);
    } 

    public function brands()
    {
        return $this->morphToMany(ProductBrand::class, 'model', 'product_brand_relations');
    }

    public function getSearchSupportsAttribute() {
        $query = $this->supports();

        $lang = request()->lang;
        $word = request()->word;
        if($word) {
            $query = $query->where(function($query) use($lang,$word){
                $query->where("name->{$lang}",'like',"%{$word}%")->orWhereHas('support_files',function($query) use ($lang,$word) {
                    $query->where("name->{$lang}",'like',"%{$word}%")->orwhere("keyword->{$lang}",'like',"%{$word}%");
                });
            });
        }
        return $query->get();
    }

    public function transformAudit(array $data): array
    {
        if (Arr::has($data, 'new_values.brands')) {
            $data['old_values']['brands'] = implode("|",collect($this->auditCustomOld['brands'])->pluck("name.zh-Hant")->toArray());
            $data['new_values']['brands'] = implode("|",$this->getAttribute('brands')->pluck('name')->toArray());
        }
        return $data;
    }
}
