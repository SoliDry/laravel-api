<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyOhMyTable extends Migration 
{
    public function up() 
    {
        Schema::create('my_oh__my', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('my_oh__my');
    }

}
