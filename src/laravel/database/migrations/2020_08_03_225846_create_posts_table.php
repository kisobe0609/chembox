<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('author_id')->default(0);
            $table->string('title');
            $table->text('content');
            $table->integer('category_id');
            $table->tinyInteger('is_closed');
            $table->string('attached_file_url1')->nullable();
            $table->string('attached_file_url2')->nullable();
            $table->string('attached_file_url3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
