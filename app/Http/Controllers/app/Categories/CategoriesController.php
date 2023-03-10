<?php


namespace App\Http\Controllers\app\Categories;


use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Pages;

class CategoriesController extends Controller
{
    public function index($categories_id)
    {
       $category=Categories::find($categories_id);
       $allnewsofeachcategory=$category->get_news;
        $allcategories=Categories::all();
        return view('app.pages.news',compact('allcategories','allnewsofeachcategory'));
    }
}
