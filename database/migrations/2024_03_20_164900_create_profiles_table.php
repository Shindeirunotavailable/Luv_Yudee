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
            $table->string('skype',50)->nullable();
            $table->string('title')->nullable();
            $table->string('facebook')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('website')->nullable();
            $table->tinyInteger('update_by')->nullable(); 
            $table->dateTime('create_datetime')->nullable();
            $table->dateTime('update_datetime')->nullable();
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
