<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBinhluan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_binhluan', function (Blueprint $table) {
            $table->id();
            $table->string('binhluan')->nullable();
            $table->integer('idtk')->nullable();
            $table->integer('idbv')->nullable();
            $table->string('username')->nullable();
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
        Schema::dropIfExists('table_binhluan');
    }
}
