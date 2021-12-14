<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /*Display a listing of the resource
     * @return \Illuminate\Http\Response
     */
    public function index(Article $article) 
    {
        $articles = Article::all();        
        return view('dashboard', [
            'article'=> $article, 
            'articles'=> $articles
        ]);
    }

    /*Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $path = $request->file('img_url')->store('public/photos');
        $url = Storage::url($path);
        // Image::make($url)->resize(200, 200, function ($constraint){
        //     $constraint->aspectRatio();
        //     $constraint->upsize();
        // });
    
        $values = $request->only(['description', 'img_url']);
        $values['img_url'] = $url;
    
        $rules = [
            'description' => 'required|max:255|unique:article,description,' . $request->user()->id,
            'img_url' => 'required|image|unique:articles,img_url,' . $request->user()->id,
            ];
     
        $request->validate($rules);
        $request->article()->create($values);
            
        return back()->with('status', __('This is online !'));
        }

    /*Show the form for editing the specified resource.
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
      $authors = DB::select('SELECT users.name FROM `users` INNER JOIN `articles` ON articles.user_id = users.id');
      return view('dashobard', [
          'author'=> $author,
          'article'=> $article
      ]);
    }

    /*Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],

            'description' => ['required', 'string', 'max:255'],
            'img_url' => ['required','string', 'max:5048']
        ]);

        $article = Article::create([
            'name' => $request->name,
   
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
