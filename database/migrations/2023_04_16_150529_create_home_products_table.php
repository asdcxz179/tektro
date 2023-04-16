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
        Schema::create('home_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_id')->constrained()->onDelete('cascade');
            $table->text('big_title')->nullable()->comment('大標題');
            $table->text('small_title')->nullable()->comment('小標題');
            $table->text('button_link')->nullable()->comment('連結');
            $table->string('path')->nullable()->comment('圖片');
            $table->string('type')->comment('類型');
            $table->unsignedInteger('product_id')->nullable()->comment('產品');
            $table->tinyInteger('sort')->default(0)->nullable()->comment('排序');
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
        Schema::dropIfExists('home_products');
    }
};
