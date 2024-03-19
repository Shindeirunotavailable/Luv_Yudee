<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            // $table->string('email')->index();
            // $table->string('resetToken');
            // $table->datetime('create_datetime')->nullable();
            // $table->datetime('update_datetime')->nullable();
            $table->id('id_password_reset');
            $table->string('email')->index();
            $table->string('resetToken');
            $table->datetime('create_datetime')->nullable();
            $table->datetime('update_datetime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
