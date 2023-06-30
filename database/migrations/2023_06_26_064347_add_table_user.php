<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
     
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('address',255)->after('name');
            $table->string('phone',13)->after('address');
            $table->string('user',255)->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
