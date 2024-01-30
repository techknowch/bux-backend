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
        Schema::create('blog_post_meta', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title');
            $table->text('meta_description');
            $table->string('robots_tag');
            $table->string('canonical_tag');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_post_meta');
    }
};
