<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();        
        return view('dashboard', [
            'article'=> $article, 
            'articles'=> $articles
        ]);
    }

    public function show(Article $article){
        $articles = Article::all();
        return view('dashboard', [
            'article' => $article,
            'articles' => $articles
        ]);
    }
}
