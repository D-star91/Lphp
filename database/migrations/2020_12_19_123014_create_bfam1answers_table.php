<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBfam1answersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bfam1answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('answer1');
            $table->string('answer2');
            $table->longText('answer3');
            $table->longText('answer4');
            $table->longText('answer5');
            $table->longText('answer6');
            $table->longText('answer7');
            $table->longText('answer8');
            $table->longText('answer9');
            $table->longText('answer10');
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
        Schema::dropIfExists('bfam1answers');
    }
}
