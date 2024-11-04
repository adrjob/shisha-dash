<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('cashbacks', function (Blueprint $table) {
            $table->string('status')->default('pending'); // Campo status com valor padrão 'pending'
        });
    }

    public function down()
    {
        Schema::table('cashbacks', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }

};