<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Area;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('名稱');

            $table->tinyInteger('sort')->default(0)->nullable()->comment('排序');          
            $table->timestamps();
        });

        $data = [
            [ 'name' => [ 'zh-Hant' => '亞洲', 'en' => 'Asia'] ],
            [ 'name' => [ 'zh-Hant' => '歐洲', 'en' => 'Europe'] ],
            [ 'name' => [ 'zh-Hant' => '非洲', 'en' => 'Africa'] ],
            [ 'name' => [ 'zh-Hant' => '美洲', 'en' => 'America'] ],
            [ 'name' => [ 'zh-Hant' => '大洋洲', 'en' => 'oceania'] ],
        ];

        foreach($data as $value){
            Area::create($value);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
};
