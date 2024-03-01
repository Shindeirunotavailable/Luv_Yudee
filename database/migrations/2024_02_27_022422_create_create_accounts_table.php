<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('email',50);
            $table->string('password');
            $table->tinyInteger('status')->default(2);
            $table->dateTime('created_datetime')->useCurrent();
            $table->dateTime('updated_datetime')->useCurrent();
            $table->timestamps('created_by');
            $table->timestamps('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('create_accounts');
    }
}
