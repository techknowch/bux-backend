<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'blog_post_category_pivot', 'blog_post_id', 'category_id')
            ->withPivot('blog_post_meta_id')
            ->withTimestamps();
    }

    public function blogPostMeta()
    {
        return $this->belongsToMany(BlogPostMeta::class, 'blog_post_category_pivot', 'blog_post_id','blog_post_meta_id');
    }


    public function assets()
    {
        return $this->belongsToMany(Asset::class, 'blog_post_asset_pivot', 'blog_post_id', 'asset_id')
            ->withTimestamps();
    }
}
