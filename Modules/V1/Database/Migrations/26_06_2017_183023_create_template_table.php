<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplateTable extends Migration 
{
    public function up() 
    {
        Schema::create('template', function(Blueprint $table) {
            $table->bigIncrements('id');
                // Category identifier  (connected to category table)
            $table->unsignedTinyInteger('category_id');
                // insert date to website
                // last time the template was updated
                // Template title
            $table->string('title', 50);
                // Template Description
            $table->string('description');
                // Image (url) to show template
            $table->string('thumbnail_url');
                // Video Demo of template
            $table->string('example_vid_url');
                // JSON data of Template
            $table->string('template_json');
                // Alpaca Forms - Schema data for form inputs (define input form to edit template)
            $table->string('input_schema');
                // Alpaca Forms - options data for form inputs (define input form to edit template)
            $table->string('input_options');
                // Alpaca Forms - data for form inputs (define input form to edit template)
            $table->string('input_data');
                // Alpaca Forms - input data for form inputs (define input form to edit template)
            $table->string('input_view');
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('template');
    }

}
