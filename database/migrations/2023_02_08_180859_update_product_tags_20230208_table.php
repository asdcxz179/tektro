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
        Schema::table('product_tags', function (Blueprint $table) {
            $table->tinyInteger('type')->default(1)->after('id')->comment('1:自行車樂別 | 2:特殊類別');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_tags', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
