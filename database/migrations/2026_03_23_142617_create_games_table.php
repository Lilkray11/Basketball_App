<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_team_id')->constrained('teams');
            $table->foreignId('away_team_id')->constrained('teams');
            $table->integer('home_score');
            $table->integer('away_score');
            $table->date('game_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('games');
    }
};