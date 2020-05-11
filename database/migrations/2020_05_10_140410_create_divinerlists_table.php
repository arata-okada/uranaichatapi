<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivinerlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divinerlists', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('name');
            $table->string('profileimage');
            $table->string('email');
            $table->string('password');
            $table->string('performance');
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
        Schema::dropIfExists('divinerlists');
    }
}
