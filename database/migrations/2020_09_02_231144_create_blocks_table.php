<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->string( 'sala') ;
            $table->string( 'professor')->nullable();
            $table->string( 'disciplina')->nullable();
            $table->string( 'nickDisciplina')->nullable();
            $table->string( 'sumario')->nullable();
            $table->string( 'image')->nullable();
            $table->timestamp( 'begin')->nullable();
            $table->unsignedBigInteger( 'day_id'); 
            $table->timestamps();

            $table  ->foreign('day_id')
                    ->references('id')
                    ->on('days')
                    ->oOnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocks');
    }
}
