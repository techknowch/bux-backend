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
    use Illuminate\Support\Facades\Storage;

    class BlogsController extends Controller
    {
        //
        public function index()
        {
            try {
                $blogPosts = BlogPost::with(['categories', 'blogPostMeta', 'assets'])->get();

                return view('backend.blogs.index', compact('blogPosts'));
            } catch (\Exception $e) {
                Log::error($e);
                return redirect()->route('home')->with('error', 'Error: ' . $e->getMessage());
            }
        }

        public function create()
        {
            $categories = Category::all();
            return view('backend.blogs.create', ['categories'=>$categories]);
        }

        public function store(Request $request)
        {

            // dd($request->file('assets'));
            // dd($request);
            try {
                $request->validate([
                    'meta_title' => 'required|string|max:255',
                    'robots_tag' => 'required|string',
                    'canonical_tag' => 'required|string',
                    'title' => 'required|string|max:255',
                    'category_id' =>'required|exists:categories,id',
                    'meta_description' => 'required|string',
                    'content' => 'required',
                    'assets' => 'image',
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

                $file = $request->file('assets');

                if ($file) {
                    $filename = $file->getClientOriginalName();
                    $path = $file->storeAs('assets', $filename, 'public');

                    $asset = Asset::create(['path' => $path]);
                    $blogPost->assets()->attach($asset->id);
                }
                DB::commit();
                return redirect()->route('dashboard')->with('success', 'Blog post created successfully');
            }
            catch (QueryException $e)
            {    Log::error('QueryException: ' . $e->getMessage());
                return redirect()->route('dashboard')->with('error', 'Error: ' . $e->getMessage());
            }
            catch (\Exception $e) {
                Log::error($e);
                DB::rollback();
                return redirect()->route('dashboard')->with('error', 'Error: ' . $e->getMessage());
            }
        }

        public function edit($id)
        {
            try {
                $blogPost = BlogPost::with(['categories', 'blogPostMeta', 'assets'])->findOrFail($id);
                $categories = Category::all();

                return view('backend.blogs.edit', compact('blogPost', 'categories'));
            } catch (\Exception $e) {
                Log::error($e);
                return redirect()->route('home')->with('error', 'Error: ' . $e->getMessage());
            }
        }


        public function update(Request $request, $id)
        {
            try {
                $request->validate([
                    'meta_title' => 'required|string|max:255',
                    'robots_tag' => 'required|string',
                    'canonical_tag' => 'required|string',
                    'title' => 'required|string|max:255',
                    'category_id' => 'required|exists:categories,id',
                    'meta_description' => 'required|string',
                    'content' => 'required',
                    'assets' => 'image',
                ]);

                DB::beginTransaction();

                // Find the existing blog post
                $blogPost = BlogPost::findOrFail($id);

                // Get specific IDs for blog post meta
                $blogPostMetaIds = $blogPost->blogPostMeta->pluck('id')->toArray();

                // Update Blog Post Meta
                BlogPostMeta::whereIn('id', $blogPostMetaIds)->update([
                    'meta_title' => $request->input('meta_title'),
                    'meta_description' => $request->input('meta_description'),
                    'robots_tag' => $request->input('robots_tag'),
                    'canonical_tag' => $request->input('canonical_tag'),
                ]);

                // Update Blog Post
                $blogPost->update([
                    'title' => $request->input('title'),
                    'content' => $request->input('content'),
                ]);

                // Update Categories
                $blogPost->categories()->sync([$request->category_id => ['blog_post_meta_id' => $blogPostMetaIds[0]]]);

                // Update Assets
                $file = $request->file('assets');

                if ($file) {
                    $filename = $file->getClientOriginalName();
                    $path = $file->storeAs('assets', $filename, 'public');

                    $asset = Asset::create(['path' => $path]);
                    $blogPost->assets()->sync([$asset->id]);
                }

                DB::commit();

                return redirect()->route('dashboard')->with('success', 'Blog post updated successfully');
            } catch (\Exception $e) {
                Log::error($e);
                DB::rollback();
                return redirect()->route('dashboard')->with('error', 'Error: ' . $e->getMessage());
            }
        }





        public function destroy($id)
        {
            try {
                $blogPost = BlogPost::findOrFail($id);

                $blogPost->categories()->detach();

                $blogPost->assets()->detach();

                $blogPost->blogPostMeta()->detach();

                $blogPost->delete();

                return response()->json(['success' => true]);
            } catch (\Exception $e) {

                return response()->json(['success' => false, 'error' => $e->getMessage()]);
            }
        }
    }
