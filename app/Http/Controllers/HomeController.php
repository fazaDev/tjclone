<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $featured = Article::published()
            ->with('category')
            ->latest('published_at')
            ->take(5)
            ->get();

        // dd($featured);

        $categories = Category::with(['articles' => function($query) {
            $query->published()->latest()->take(3);
        }])->get();

        $popularArticles = Article::popular()->take(5)->get();

        // dd($categories);

        return view('frontend.home', compact('featured', 'categories', 'popularArticles'));
    }

    public function search(Request $request)
    {
        $results = Article::published()
            ->filter($request->only('search'))
            ->paginate(10)
            ->withQueryString();

        return view('frontend.search', compact('results'));
    }
}
