<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $featuredPosts = Post::with('categories')
            ->featured()
            ->published()
            ->latest('published_at')
            ->take(3)->get();


        $latestPosts = Post::with('categories')
            ->published()
            ->latest('published_at')->take($request->numPosts ?? 3)->get();

        return view('home', [
            'featuredPosts' => $featuredPosts,
            'latestPosts' => $latestPosts
        ]);
    }
}
