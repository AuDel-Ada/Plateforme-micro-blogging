<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    /*Display a listing of the resource
     * @return \Illuminate\Http\Response
     */
    public function index(Article $article){
        $articles = Article::all();        
        return view('dashboard', [
            'article'=> $article, 
            'articles'=> $articles
        ]);
    }

    /*Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /*Show the form for editing the specified resource.
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
      
    }

    /*Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'description' => ['required', 'string', 'max:255'],
            'img_url' => ['required','string', 'max:5048']
        ]);

        $article = Article::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'description' => $request->description,
            'img_url' => $request->img_url,
        ]);

        // event(new Registered($article));

        // Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    /*Display the specified resource.
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */

    // public function show(Article $article){
    //     $articles = Article::all();
    //     return view('dashboard', [
    //         'article' => $article,
    //         'articles' => $articles
    //     ]);
    // }

    public function show(Article $article){
        $articles = Article::all();
        return view('dashboard', compact ('articles')
        );
    }

    /*Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
         
    }
 
 
    /*Remove the specified resource from storage.
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
         
    }
}
