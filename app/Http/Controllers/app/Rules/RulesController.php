<?php


namespace App\Http\Controllers\app\Rules;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use App\Models\Pages;

class RulesController extends Controller
{

    public function index()
    {
        $rules=Pages::find(2);
        $allcategories=Categories::all();
        return view('app.pages.rules',compact('rules','allcategories'));
    }

}
