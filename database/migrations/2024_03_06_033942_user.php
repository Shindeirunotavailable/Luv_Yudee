<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('email', 50);
            $table->string('password');
            $table->tinyInteger('status')->default(2);
            $table->dateTime('create_datetime')->useCurrent();
            $table->dateTime('update_datetime')->useCurrent();
            $table->tinyInteger('create_by')->default(0); // ปรับเปลี่ยนเป็น unsignedBigInteger สำหรับ id
            $table->tinyInteger('update_by')->default(0); // ปรับเปลี่ยนเป็น unsignedBigInteger สำหรับ id และให้ nullable
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
        Schema::dropIfExists('user');
    }
}
