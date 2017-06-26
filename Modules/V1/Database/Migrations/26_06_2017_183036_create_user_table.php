<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration 
{
    public function up() 
    {
        Schema::create('user', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 256);
            $table->string('last_name', 256);
                // user password to refresh JWT (encrypted with password_hash)
            $table->string('password', 255);
                // Special field to run JWT Auth via requests
            $table->string('jwt', 512)->default(' ');
            $table->unsignedBigInteger('permissions');
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('user');
    }

}
