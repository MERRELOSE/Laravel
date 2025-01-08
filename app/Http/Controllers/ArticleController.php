<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;




class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all(); // Liste tous les articles
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->user_id = auth()->id();

        // Traitement de l'image
        if ($request->hasFile('image')) {
            $article->image = $request->file('image')->store('articles_images', 'public');
        }

        $article->save();

        return redirect()->route('articles.index');
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $article->title = $request->title;
        $article->content = $request->content;

        // Traitement de l'image
        if ($request->hasFile('image')) {
            $article->image = $request->file('image')->store('articles_images', 'public');
        }

        $article->save();

        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}

