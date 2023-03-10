<?php


namespace App\Http\Controllers\Admin\Categories;


use App\Http\Controllers\Controller;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $allcategories=Categories::all();
        return view('admin.categories.list',compact('allcategories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function show($category_id)
    {
         $certain_category=Categories::find($category_id);
         return view('admin.categories.edit',compact('certain_category'));
    }

    public function store()
    {
        $data=request()->validate([
            'name'=>'',
            'status'=>''
        ]);

        Categories::create($data);
        return redirect()->route('categories');
    }

    public function update($category_id)
    {
        $certain_category=Categories::find($category_id);
        $data=request()->validate([
            'name'=>'',
            'status'=>''
        ]);
        $certain_category->update($data);
        return redirect()->route('categories');
    }

    public function destroy($category_id)
    {
        $certain_categories=Categories::find($category_id);
        $certain_categories->delete();
        return redirect()->route('categories');
    }
}
