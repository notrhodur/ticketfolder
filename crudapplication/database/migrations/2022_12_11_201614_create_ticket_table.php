<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->string('desc')->default('');
            $table->string('progress')->default('');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('ticket');
    }
};
