<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('price');
            $table->integer('rating');
            $table->integer('number_of_reviews');
            $table->unsignedBigInteger('chef_id');
            $table->timestamps();

            $table->foreign('chef_id')
                ->references('id')
                ->on('chefs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->dropForeign(['chef_id']);
        });
        Schema::dropIfExists('classes');
    }
}
