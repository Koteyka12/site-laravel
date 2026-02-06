<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
use App\Models\Blog\PostViewStat;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->with(['categories', 'tags', 'seo'])
            ->paginate(9);

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }

    public function show(string $slug): View
    {
        $post = Post::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with(['categories', 'tags', 'seo'])
            ->firstOrFail();

        Post::whereKey($post->id)->increment('views');

        $today = Carbon::today()->toDateString();
        $stat = PostViewStat::firstOrCreate([
            'date' => $today,
            'post_id' => $post->id,
        ]);
        $stat->increment('views');

        return view('blog.show', [
            'post' => $post,
        ]);
    }
}
