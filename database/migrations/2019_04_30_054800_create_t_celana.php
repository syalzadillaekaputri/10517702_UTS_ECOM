<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTCelana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_celana', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_produk', 100);
            $table->string('bentuk_produk', 100);
            $table->string('color', 20);
            $table->string('ukuran', 5);
            $table->string('stok',200);
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
        Schema::dropIfExists('t_celana');
    }
}
