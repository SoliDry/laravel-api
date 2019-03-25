<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicTable extends Migration 
{
    public function up() 
    {
        Schema::create('topic', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 256);
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('topic');
    }

}
