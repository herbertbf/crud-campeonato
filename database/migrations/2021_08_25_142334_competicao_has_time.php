<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompeticaoHasTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competicoes_has_time', function (Blueprint $table) {
            $table->id();
            $table->foreignId('competicao_id')->constrained('competicoes');
            $table->foreignId('time_id')->constrained('times');
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
        Schema::dropIfExists('competicao_has_time');
    }
}
