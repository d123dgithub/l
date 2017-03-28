<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    //
    public function create()
    {
        return view('articles.create');
    }


    public function  store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|min:3|max:10',
            'intro'=>'required',
            'content'=>'required',
        ]);
        $article=array_merge(['user_id'=>\Auth::user()->id],$request->all());
        Article::create($article);
        return redirect('/article');

    }


    public function index()
    {
        $article = new Article();
//        $articles = $article->where('published_at','<=',Carbon::now())->latest()->get();
        $articles = $article->published()->latest()->get();
        return view('articles.index', [
            'articles' => $articles,
        ]);

    }


    public function show($id)
    {
        $article = Article::findOrFail($id);
//      $user=  $article->user;
//        dd($user);
//        dd($article->published_at->diffForHumans());
        return view('articles.show', [
            'article' => $article,
        ]);

    }

    public function update(Request  $request,$id){
        $article=Article::findOrFail($id);
        $article->update($request->all());
        return redirect('article');
    }



    public function edit($id){
       $article= Article::findOrFail($id);
        return  view('articles.edit',[
            'article'=>$article,
        ]);

    }
}
