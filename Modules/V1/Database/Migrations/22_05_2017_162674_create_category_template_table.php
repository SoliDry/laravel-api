<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTemplateTable extends Migration 
{
    public function up() 
    {
        Schema::create('category_template', function(Blueprint $table) {
            $table->increments('id');
            // TemplatesCategories title
            $table->string('title', 50);
            // TemplatesCategories Description
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('category_template');
    }

}
