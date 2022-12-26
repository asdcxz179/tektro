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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->nullable()->comment('地區id')->constrained()->nullOnDelete();
            $table->string('question')->nullable()->comment('問題');
            $table->string('country')->nullable()->comment('國家');
            $table->string('name')->nullable()->comment('姓名');
            $table->string('email')->nullable()->comment('信箱');
            $table->string('phone')->nullable()->comment('電話');
            $table->string('content')->nullable()->comment('內容');
      
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
        Schema::dropIfExists('contacts');
    }
};
