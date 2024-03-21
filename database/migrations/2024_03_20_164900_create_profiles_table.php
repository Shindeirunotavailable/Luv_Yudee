<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id('id_review');
            $table->string('name',50)->nullable();
            $table->string('lastname',50)->nullable();
            $table->string('phone',10)->nullable();
            $table->string('mobile',10)->nullable();
            $table->string('email',50)->nullable();
            $table->tinyInteger('update_by'); 
            $table->dateTime('create_datetime');
            $table->dateTime('update_datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
