<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $posts = BlogPost::with('category')
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhereHas('category', function ($query) use ($search) {
                $query->where('category', 'LIKE', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.blog.index', ['posts' => $posts, 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = PostCategory::all();
        return view('admin.blog.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = $request->validate([
            'title' => 'required|string',
            'category_id' => 'required|string',
            'description' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg,avif,webp|max:2048',
            'featured' => 'nullable'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = 'images/blog/';
            $imagename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imagename, 'public');
            $post['image'] = $imagename;
        }

        $post['category_id'] = PostCategory::where('category', $request->category_id)->first()->id;

        if ($request->featured && $request->featured == 'on') {
            $post['featured'] = 1;
        } else {
            $post['featured'] = 0;
        }

        $post = BlogPost::create($post);

        return to_route('admin.post.index')->with('message', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost $post)
    {
        return view('admin.blog.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPost $post)
    {
        $categories = PostCategory::all();
        return view('admin.blog.edit', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $post)
    {
        $updatedPost = $request->validate([
            'title' => 'required|string',
            'category_id' => 'required|string',
            'description' => 'required',
            'image' => 'nullable|file|mimes:png,jpg,jpeg,avif,webp|max:2048',
            'featured' => 'nullable'
        ]);

        $imagename = $post->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = 'images/blog/';
            $imagename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imagename, 'public');

            // removing the existing image
            $existingImage = $path . $post->image;
            if ($post->file && Storage::disk('public')->exists($existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
        }

        $updatedPost['image'] = $imagename;
        $updatedPost['category_id'] = PostCategory::where('category', $request->category_id)->first()->id;
        if ($request->featured && $request->featured == 'on') {
            $updatedPost['featured'] = 1;
        } else {
            $updatedPost['featured'] = 0;
        }

        $post->update($updatedPost);

        return to_route('admin.post.show', ['post' => $post])->with('message', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $post)
    {
        $path = 'images/blog/';

        // delete the existing image
        $existingImage = $path . $post->file;
        if ($post->file && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $post->delete();

        return to_route('admin.post.index')->with('message', 'Post deleted');
    }
}
