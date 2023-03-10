<?php


namespace App\Http\Controllers\Admin\News;


use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Categories_News;
use App\Models\News;
use App\Models\News_Rubrics;
use App\Models\Rubric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController  extends Controller
{

    public function index()
    {
        $allnews=News::all();
//        $allnews=News::query()
//            ->with('get_categories')
//            ->get();
        return view('admin.news.list',compact('allnews'));
    }

    public function create()
    {
        $allcategories=Categories::all();
        $allrubric=Rubric::all();
        return view('admin.news.create',compact('allcategories','allrubric'));
    }

    public function show($news_id)
    {
        $certain_news=News::find($news_id);
        $allcategoriesss=Categories::all();
        $allrubrics=Rubric::all();
        return view('admin.news.edit',compact('certain_news','allcategoriesss','allrubrics'));
    }

    public function store()
    {
        $data=request()->validate([
            'image'=>'required',
            'title'=>'required',
            'author'=>'required',
            'content'=>'required|min:10',
            'seotitles'=>'',
            'seodescriptions'=>'',
            'seokeywords'=>'',
            'сategories'=>'',
            'rubrics'=>'',
            'date_of_creation'=>'required',
            'visibility'=>'required',
        ]);


        $categories=$data ['сategories'];
        $rubrics=$data ['rubrics'];
        unset($data ['сategories']);
        unset($data ['rubrics']);

        $image_path=Storage::disk('public')->put('/images',$data['image']);//put loaded image to storage
        $data['image']=$image_path;//set url for image


        $post=News::create($data);

        foreach ($categories as $category){
            Categories_News::firstOrCreate([
                'news_id'=>$post->id,
                'category_id'=>$category
            ]);
        }

        foreach ($rubrics as $rubric){
            News_Rubrics::firstOrCreate([
                'news_id'=>$post->id,
                'rubric_id'=>$rubric
            ]);
        }


        return redirect()->route('allnews');

    }

    public function update(Request $request, $news_id)
    {
        $data = $request->validate([
            'image'=>'required',
            'title'=>'required',
            'author'=>'required',
            'content'=>'required|min:10',
            'seotitles'=>'',
            'seodescriptions'=>'',
            'seokeywords'=>'',
            'сategories'=>'required',
            'rubrics'=>'required',
            'date_of_creation'=>'required',
            'visibility'=>'required',
        ]);
        $categories = $data ['сategories'];
         $rubrics = $data ['rubrics'];

        unset($data['сategories']);
        unset($data['rubrics']);

        $certain_news = News::find($news_id);
        Storage::disk('public')->delete($certain_news->image);
        $image_path=Storage::disk('public')->put('/images',$data['image']);
        $data['image']=$image_path;//set url for image

        $certain_news->get_categories()->sync($categories);
        $certain_news->get_rubrics()->sync($rubrics);

//        foreach ($categories as $category){
//            Categories_News::firstOrUpdate([
//                'news_id'=>$certain_news->id,
//                'category_id'=>$category,
//            ]);
//        }

//        foreach ($rubrics as $rubric){
//            News_Rubrics::firstOrUpdate([
//                'news_id'=>$certain_news->id,
//                'rubric_id'=>$rubric
//            ]);
//
//        }

        $certain_news->update($data);

        return redirect()->route('allnews');
    }

    public function destroy($news_id)
    {
        $certain_news=News::find($news_id);

        Categories_News::where(['news_id'=>$news_id])
                       ->delete();

        News_Rubrics::where(['news_id'=>$news_id])
                        ->delete();

        $certain_news->delete();
        return redirect()->route('allnews');
    }
}
