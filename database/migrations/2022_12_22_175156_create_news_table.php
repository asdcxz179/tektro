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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('名稱');
            $table->string('description')->nullable()->comment('描述');
            $table->text('content')->nullable()->comment('內容');

            $table->string('show_date')->nullable()->comment('描述');
            $table->string('banner')->nullable()->comment('描述');

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
        Schema::dropIfExists('news');
    }
};
