<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration 
{
    public  function up() {
        Schema::create('article', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('url');
            // Show at the top of main page
            $table->unsignedTinyInteger('show_in_top');
            $table->timestamps();
        });
    }

    public  function down() {
        Schema::create('article', function(Blueprint $table) {
            $table->dropIfExists('article');
        });
    }


}
