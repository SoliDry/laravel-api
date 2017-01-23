<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration 
{
    public function up() 
    {
        Schema::create('article', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title', 256);
            $table->string('description', 1024);
            $table->string('url', 255);
            // Show at the top of main page
            $table->unsignedTinyInteger('show_in_top');
            // ManyToOne Topic relationship
            $table->integer('topic_id');
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('article');
    }

}
