<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->decimal('invested_amount', 15, 2)->default(0);
            $table->decimal('profit', 15, 2)->default(0);
            $table->decimal('bonus', 15, 2)->default(0);
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['invested_amount', 'profit', 'bonus']);
        });
    }

};
