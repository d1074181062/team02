<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id()->comment('編號');
            $table->string('name')->comment('神奇寶貝');
            $table->tinyInteger('team_num')->comment('派系編號');
            $table->float('height')->comment('身高');
            $table->float('weight')->comment('體重');
            $table->string('growing')->comment('進化可能')->nullable();
            $table->string('group')->comment('地區');
            $table->string('place')->comment('出現場所');
            $table->foreign('team_num')->references('id')->on('property')->onDelete('cascade');
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
        Schema::dropIfExists('pokemons');
    }
}
