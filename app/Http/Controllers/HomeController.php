<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $latestPosts = Post::query()
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('home.index', [
            'latestPosts' => $latestPosts,
        ]);
    }
}
