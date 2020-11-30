<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_results', function (Blueprint $table) {
            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('winner_player_id');
            $table->primary('match_id');
            $table->foreign('match_id')->references('id')->on('matches');
            $table->foreign('winner_player_id')->references('id')->on('members');
            $table->integer('number_of_sets');
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
        Schema::dropIfExists('match_results');
    }
}
