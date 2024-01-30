<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blog_post_category_pivot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_post_id')->constrained('blog_posts');
            $table->foreignId('blog_post_meta_id')->constrained('blog_post_meta');
            $table->foreignId('category_id')->constrained('categories');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_post_blog_post_meta');
    }
};
