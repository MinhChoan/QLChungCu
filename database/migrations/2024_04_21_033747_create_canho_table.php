<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanhoTable extends Migration
{
    public function up()
    {
        Schema::create('canho', function (Blueprint $table) {
            // Sử dụng MaCanHo làm primary key thay vì id
            $table->string('MaCanHo')->primary()->unique();
            $table->string('MaToaNha');
            $table->string('MaCuDan');
            $table->integer('SoPhong');
            $table->double('DienTich');
            $table->string('TinhTrang');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('canho');
    }

};
