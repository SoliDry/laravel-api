<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration 
{
    public function up() 
    {
        Schema::create('user', function(Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 256);
            $table->string('last_name', 256);
            // Special field to run JWT Auth via requests
            $table->string('jwt', 512);
            // Needed to create JWT with secret
            $table->string('uniqid', 13);
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('user');
    }

}
