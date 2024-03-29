<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('name'); $table->text('body'); 
            //Atrubutos foraneos 
            $table->unsignedBigInteger('user_id')->nullable(); 
            $table->unsignedBigInteger('categorias_id')->nullable(); 
            //relacion con user
             $table->foreign('user_id') 
             ->references('id') 
             ->on('users')
             ->onDelete('set null'); 
             //relacion con categoria 
             $table->foreign('categorias_id') 
             ->references('id')
             ->on('categorias') 
             ->onDelete('set null');


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
        Schema::dropIfExists('posts');
    }
};
