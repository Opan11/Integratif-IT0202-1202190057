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
            // $table->foreignId('category_id');
            $table->foreignId('rss_id');
            // $table->foreignId('image_id');
            // $table->string('img_url');
            $table->string('title');
            // $table->string('slug');
            $table->string('category');
            // $table->text('excerpt');
            $table->text('url');
            $table->string('img')->nullable();
            // $table->timestamp('published_at')->nullable();
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
