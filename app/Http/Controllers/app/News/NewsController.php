<?php


namespace App\Http\Controllers\app\News;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use App\Models\Rubric;

class NewsController extends Controller
{

    public function index()
    {
        $allnews = News::all();
        $mainnews_rubric = Rubric::find(1);
        $mainnews=$mainnews_rubric->get_news;
        $slidernews = $allnews->take(5);
        $main = $allnews->chunk(3);
        $allcategories=Categories::all();
        return view('app.pages.main',compact('slidernews','mainnews','allnews', 'main','allcategories'));

    }

    public function show($news_id)
    {
        $certainnews=News::find($news_id);
        $recomended_rubric = Rubric::find(2);
        $recommendednews=$recomended_rubric->get_news;
        $allcategories=Categories::all();
        return view('app.pages.certainnews',compact('certainnews','allcategories','recommendednews'));

    }
}
