<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $fillable = ['path'];


public function blogPosts()
{
    return $this->belongsToMany(BlogPost::class, 'blog_post_asset_pivot', 'asset_id', 'blog_post_id');
}

}
