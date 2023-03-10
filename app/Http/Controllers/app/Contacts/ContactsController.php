<?php


namespace App\Http\Controllers\app\Contacts;


use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Pages;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts=Pages::find(1);
        $allcategories=Categories::all();
        return view('app.pages.contacts' ,compact('contacts','allcategories'));
    }
}
