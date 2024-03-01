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
            $table->string('email', 50);
            $table->string('password');
            $table->tinyInteger('status')->default(2);
            $table->dateTime('created_datetime')->useCurrent();
            $table->dateTime('updated_datetime')->useCurrent();
            $table->unsignedBigInteger('created_by')->default(); // ปรับเปลี่ยนเป็น unsignedBigInteger สำหรับ id
            $table->foreign('created_by')->references('id')->on('create_accounts'); // สร้าง foreign key ที่อ้างอิงไปยัง id ของตารางเดียวกัน
            $table->unsignedBigInteger('updated_by')->nullable(); // ปรับเปลี่ยนเป็น unsignedBigInteger สำหรับ id และให้ nullable
            $table->foreign('updated_by')->references('id')->on('create_accounts')->onDelete('set null'); // สร้าง foreign key ที่อ้างอิงไปยัง id ของตารางเดียวกัน
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
        Schema::dropIfExists('create_accounts');
    }
}
