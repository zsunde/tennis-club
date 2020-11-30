<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_results', function (Blueprint $table) {
            $table->integer('set_number');
            $table->unsignedBigInteger('match_id');
            $table->primary(['match_id', 'set_number']);
            $table->foreign('match_id')->references('id')->on('matches');
            $table->integer('player1_games');
            $table->integer('player2_games');
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
        Schema::dropIfExists('set_results');
    }
}
