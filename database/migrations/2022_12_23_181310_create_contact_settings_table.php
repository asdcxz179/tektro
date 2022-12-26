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
        Schema::create('contact_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->nullable()->comment('地區id')->constrained()->nullOnDelete();
            $table->string('email')->nullable()->comment('信箱');
            $table->string('remark')->nullable()->comment('電話');
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
        Schema::dropIfExists('contact_settings');
    }
};
