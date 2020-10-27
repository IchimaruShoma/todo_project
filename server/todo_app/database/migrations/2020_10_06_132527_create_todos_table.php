<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration{
    public function up(){
        Schema::create('todos', function (Blueprint $table){
            $table->increments('id');
            $table->text('title');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('todos');
    }
}
