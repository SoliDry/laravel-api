<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration 
{
    public function up() 
    {
        Schema::create('menu', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('rfc')->default('/');
            // mandatory field for building trees
            $table->unsignedInteger('parent_id');
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('menu');
    }

}
