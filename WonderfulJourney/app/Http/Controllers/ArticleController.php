<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function getAllArticle(){
        $articles = Article::all();
        return view('home_guest')->with('articles', $articles);
    }

    public function getCategorizedArticle($category_id){
        $articles = Article::where('category_id', $category_id)->get();
        $categories = Category::all();
        return view('home_categorized_guest')->with(['articles' => $articles, 'categories' => $categories]);
    }

    public function getArticleById($article_id){
        $article = Article::where('id', $article_id)->first();
        return view('full_story')->with('article', $article);
    }

    public function getArticleByUserId($user_id){
        $articles = Article::where('user_id', $user_id)->get();
        return view('user_article')->with('articles', $articles);
    }

    public function getOwnedArticle(){
        $articles = Article::where('user_id', Auth::user()->id)->get();
        return view('all_article')->with('articles', $articles);
    }

    public function deleteArticle($article_id){
        $article = Article::where('id', '=', $article_id)->delete();
        return redirect()->back();
    }

    public function showCreateArticle(){
        return view('create_article');
    }

    public function createArticle(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|image',
            'description' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        Article::create([
            'title' => $request->title,
            'user_id' => Auth::user()->id,
            'category_id' => $request->category,
            'description' => $request->description,
            'image' => $request->file('image')->getClientOriginalName(),
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();

        $image->move(public_path('assets'), $imageName);

        return redirect('/home');
    }

    public function back(){
        return redirect()->back();
    }
}
