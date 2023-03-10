<?php


namespace App\Http\Controllers\Admin\Pages;


use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Pages;

class PagesController extends Controller
{
    public function index()
    {
        $allpages=Pages::all();
        return view('admin.pages.list',compact('allpages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function show($pages_id)
    {
        $certain_pages=Pages::find($pages_id);
        return view('admin.pages.edit',compact('certain_pages'));
    }

    public function store()
    {
        $data=request()->validate([
            'title'=>'',
            'content'=>''
        ]);

        Pages::create($data);
        return redirect()->route('allpages');
    }

    public function update($pages_id)
    {
        $certain_pages=Pages::find($pages_id);
        $data=request()->validate([
            'title'=>'',
            'content'=>''
        ]);
        $certain_pages->update($data);
        return redirect()->route('allpages');
    }

    public function destroy($pages_id)
    {
        $certain_pages=Pages::find($pages_id);
        $certain_pages->delete();
        return redirect()->route('allpages');
    }
}
