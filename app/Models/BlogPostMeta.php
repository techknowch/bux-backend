<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostMeta extends Model
{
    use HasFactory;

    protected $table = 'blog_post_meta';
    protected $fillable = ['meta_title', 'meta_description', 'robots_tag', 'canonical_tag'];

    public function blogPost()
    {
        return $this->belongsToMany(BlogPost::class, 'blog_post_category_pivot', 'blog_post_meta_id','blog_post_id');
    }
}

