<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration 
{
    public function up() 
    {
        Schema::create('article', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 256);
            $table->index('title', 'idx_title');
            $table->string('description', 1024);
            $table->string('url', 255);
            $table->unique('url', 'idx_url');
                // Show at the top of main page
            $table->unsignedTinyInteger('show_in_top');
            $table->enum('status', ['draft', 'published', 'postponed', 'archived']);
                // ManyToOne Topic relationship
            $table->unsignedMediumInteger('topic_id');
            //$table->foreign('topic_id', 'idx_fk_topic_id')->references('id')->on('topic')->onDelete('cascade')->onUpdate('cascade');
            $table->double('rate', 9, 3);
            $table->date('date_posted');
            $table->time('time_to_live');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('article');
    }

}
