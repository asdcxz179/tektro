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
        Schema::create('web_settings', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable()->comment('標題');
            $table->text('keyword')->nullable()->comment('關鍵字');
            $table->text('description')->nullable()->comment('描述');
            $table->text('author')->nullable()->comment('作者');
            $table->text('copyright')->nullable()->comment('版權宣告');
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
        Schema::dropIfExists('web_settings');
    }
};
