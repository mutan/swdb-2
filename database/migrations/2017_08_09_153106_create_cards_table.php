<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('edition_id')->unsigned();
            $table->foreign('edition_id')->references('id')->on('editions')->onDelete('cascade');

            $table->integer('rarity_id')->unsigned();
            $table->foreign('rarity_id')->references('id')->on('rarities')->onDelete('cascade');

            // race: many-to-many
            // type: many-to-many
            // artist: many-to-many

            $table->string('name', 100)->index();
            $table->integer('number');
            $table->string('image', 255)->nullable();

            $table->integer('firepower')->nullable();
            $table->integer('defence')->nullable();
            $table->integer('energy')->nullable();
            $table->integer('dopotsek')->nullable();
            $table->integer('strategy_points')->nullable();
            $table->text('features_line')->nullable();
            $table->text('command_line_1')->nullable();
            $table->text('command_line_2')->nullable();
            $table->text('flavor')->nullable();
            $table->text('erratas')->nullable();
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('cards');
    }
}
