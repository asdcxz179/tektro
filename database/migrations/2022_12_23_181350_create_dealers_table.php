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
        Schema::create('dealers', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable()->comment('名稱');
            $table->string('company')->nullable()->comment('公司名稱');

            $table->string('phone')->nullable()->comment('電話');
            $table->string('email')->nullable()->comment('email');
            $table->string('website')->nullable()->comment('website');

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
        Schema::dropIfExists('dealers');
    }
};
