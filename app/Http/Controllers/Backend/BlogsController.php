<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\BlogPost;
use App\Models\BlogPostMeta;
use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BlogsController extends Controller
{
    //
    public function create()
    {
        $categories = Category::all();
        return view('backend.blogs.create', ['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        dd($request);
        try {
            $request->validate([
                'meta_title' => 'required|string|max:255',
                'robots_tag' => 'required|string',
                'canonical_tag' => 'required|string',
                'title' => 'required|string|max:255',
                'category_id' =>'required|exists:categories,id',
                'meta_description' => 'required|string',
                'content' => 'required',
                'assets.*' => 'image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
            ]);
            DB::beginTransaction();
            $blogPostMeta = BlogPostMeta::create([
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'robots_tag' => $request->input('robots_tag'),
                'canonical_tag' => $request->input('canonical_tag'),
            ]);

            $blogPost = BlogPost::create([
                'title' => $request->input('title'),
                'content' => $request->input('content')
            ]);

            $blogPost->categories()->attach($request->category_id,['blog_post_meta_id'=> $blogPostMeta->id]);

            foreach($request->file('assets') as $file)
            {
                $path = $file->store('assets', 'public');
                $asset = Asset::create(['path'=>$path]);
                $blogPost->assets()->attach($asset->id);
            }

            DB::commit();
            return redirect()->route('dashboard')->with('success', 'Blog post created successfully');
        }
        catch (QueryException $e)
        {
            return redirect()->route('dashboard')->with('error', 'Error: ' . $e->getMessage());
        }
        catch (\Exception $e) {
            Log::error($e);
            DB::rollback();
            return redirect()->route('dashboard')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
