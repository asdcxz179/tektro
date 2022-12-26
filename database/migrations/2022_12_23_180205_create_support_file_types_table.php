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
        Schema::create('support_file_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable()->comment('名稱')->unique();
            $table->string('key', 50)->nullable()->comment('key')->unique();
            $table->timestamps();
        });

        DB::table('support_file_types')->insert(['name' => '使用手冊', 'key' => 'apply']);
        DB::table('support_file_types')->insert(['name' => 'bom清單', 'key' => 'bom']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_file_types');
    }
};
