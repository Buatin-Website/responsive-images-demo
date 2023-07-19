<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::orderByDesc('created_at')->paginate(10),
        ]);
    }

    /**
     * @throws FileIsTooBig
     * @throws FileDoesNotExist
     */
    public function store(PostRequest $request)
    {
        $post = Post::create($request->validated());
        $post->addMediaFromRequest('image')->withResponsiveImages()->toMediaCollection();

        return redirect()->back();
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back();
    }
}
