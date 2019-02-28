<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagArticleTable extends Migration 
{
    public function up() 
    {
        Schema::create('tag_article', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('article_id');
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('tag_article');
    }

}
