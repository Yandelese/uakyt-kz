<?php


namespace App\Http\Controllers\Admin\Rubric;


use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Rubric;

class RubricController extends Controller
{
    public function index()
    {
        $allrubric=Rubric::all();
        return view('admin.rubric.list',compact('allrubric'));
    }

    public function create()
    {
        return view('admin.rubric.create');
    }

    public function show($rubric_id)
    {
         $certain_rubric=Rubric::find($rubric_id);
         return view('admin.rubric.edit',compact('certain_rubric'));
    }

    public function store()
    {
        $data=request()->validate([
            'name'=>'',
            'status'=>''
        ]);

        Rubric::create($data);
        return redirect()->route('rubric');
    }

    public function update($rubric_id)
    {
        $certain_rubric=Rubric::find($rubric_id);
        $data=request()->validate([
            'name'=>'',
            'status'=>''
        ]);
        $certain_rubric->update($data);
        return redirect()->route('rubric');
    }

    public function destroy($rubric_id)
    {
        $certain_rubric=Rubric::find($rubric_id);
        $certain_rubric->delete();
        return redirect()->route('rubric');
    }
}
