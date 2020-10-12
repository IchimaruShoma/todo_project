<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration{
    public function up(){
        Schema::create('todos', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('user_id');
            $table->boolean('complete')->default(false);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('todos');
    }
}
