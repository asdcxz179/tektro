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
        Schema::table('support_files', function (Blueprint $table) {
            $table->text('keyword')->default("{}")->after('name')->comment('站內關鍵字');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('support_files', function (Blueprint $table) {
            $table->dropColumn('keyword');
        });
    }
};
