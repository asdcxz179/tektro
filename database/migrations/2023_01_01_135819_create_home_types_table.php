<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('名稱');
            $table->string('relation')->nullable()->comment('關聯');

            $table->tinyInteger('sort')->default(0)->nullable()->comment('排序');          
            $table->timestamps();
        });

        $data = [
            [ 'name' => '首頁輪播圖片', 'relation' => 'home_carousels'],
            [ 'name' => '首頁最新消息', 'relation' => 'home_news'],
            [ 'name' => '首頁影片', 'relation' => 'home_videos'],
            [ 'name' => '首頁網站描述', 'relation' => 'home_webs'],
            [ 'name' => '首頁品牌介紹', 'relation' => 'home_brands'],
            [ 'name' => '首頁圖片', 'relation' => 'home_images'],
        ];

        DB::table('home_types')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_types');
    }
};
