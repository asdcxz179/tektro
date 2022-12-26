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
        Schema::create('product_brands', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('名稱');
            $table->string('advertise_title')->nullable()->comment('廣告標題');
            $table->string('advertise_subtitle')->nullable()->comment('廣告副標題');
            $table->string('below_advertise_title')->nullable()->comment('下方廣告標題');
            $table->string('below_advertise_subtitle')->nullable()->comment('下方廣告副標題');

            $table->string('banner')->nullable()->comment('橫幅');
            $table->string('advertise_image')->nullable()->comment('廣告圖片');
            $table->string('advertise_link')->nullable()->comment('廣告連結');
            $table->string('below_advertise_image')->nullable()->comment('下方廣告圖片');
            $table->string('below_advertise_switch')->nullable()->comment('下方廣告按鈕顏色');
            $table->string('below_advertise_link')->nullable()->comment('下方廣告連結');

            $table->tinyInteger('sort')->default(0)->nullable()->comment('排序');
            $table->tinyInteger('status')->default(1)->comment('狀態');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_brands');
    }
};
