<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function blogPosts()
    {
        return $this->belongsToMany(BlogPost::class, 'blog_post_category_pivot', 'category_id', 'blog_post_id')
            ->withPivot('blog_post_meta_id');
    }
}


