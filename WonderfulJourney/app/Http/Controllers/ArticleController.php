<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getAllArticle(){
        $articles = Article::all();
        return view('home_guest')->with('articles', $articles);
    }

    public function getCategorizedArticle($category_id){
        $articles = Article::where('category_id', $category_id)->get();
        return view('home_categorized_guest')->with('articles', $articles);
    }

    public function getArticleById($article_id){
        $article = Article::where('id', $article_id)->first();
        return view('full_story')->with('article', $article);
    }

    public function getArticleByUserId($user_id){
        $articles = Article::where('user_id', $user_id)->get();
        return view('user_article')->with('articles', $articles);
    }

    public function deleteArticle($article_id){
        $article = Article::where('id', '=', $article_id)->delete();
        return redirect()->back();
    }
}
