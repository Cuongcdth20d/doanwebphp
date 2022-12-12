<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBaiviet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baidangs', function (Blueprint $table) {
            $table->id();
            $table->string('loai');
            $table->string('noidung');
            $table->string('noimat');
            $table->date('ngaymat');
            $table->string('username');
            $table->string('image');
            $table->integer('phone');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table__baiviet');
    }
}
