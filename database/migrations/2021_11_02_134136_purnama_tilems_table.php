<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PurnamaTilemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purnama_tilems', function (Blueprint $table) {
            $table->id();
            $table->text('Nama');
            $table->text('Januari');
            $table->text('Februari');
            $table->text('Maret');
            $table->text('April');
            $table->text('Mei');
            $table->text('Juni');
            $table->text('Juli');
            $table->text('Agustus');
            $table->text('September');
            $table->text('Oktober');
            $table->text('November');
            $table->text('Desember');
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
        Schema::dropIfExists('purnama_tilems');
    }
}
