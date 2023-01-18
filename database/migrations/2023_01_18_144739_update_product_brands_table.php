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
        Schema::table('product_brands', function (Blueprint $table) {
            $table->string('file_data_name')->nullable()->after('below_advertise_link')->comment('檔案');
            $table->string('file')->nullable()->after('below_advertise_link')->comment('檔案');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_brands', function (Blueprint $table) {
            $table->dropColumn('file_data_name');
            $table->dropColumn('file');
        });
    }
};
