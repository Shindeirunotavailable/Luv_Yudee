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
            $table->string('name',50); 
            $table->tinyInteger('status')->default(1); // status 1 เมื่อผู้ใช้งานสมัครแล้วแต่ยังไม่ได้ทำการยืนยัน email , status 2 เมื่อผู้ใช้งานทำการยืนยันอีเมล์แล้ว
            $table->dateTime('create_datetime')->useCurrent();
            $table->dateTime('update_datetime')->useCurrent();
            $table->tinyInteger('create_by')->default(0); 
            $table->tinyInteger('update_by')->default(0); 
            $table->boolean('Isadmin')->default(0);
            $table->rememberToken();
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
