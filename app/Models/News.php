<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='news';

    protected $id;

    protected $image;
    protected $title;
    protected $author;
    protected $content;

    protected $SEOtitle;
    protected $SEOdescriptions;
    protected $SEOdkeywords;

    protected $date_of_creation;
    protected $visible;

    protected $views;
    protected $type;

    public function get_categories()
    {
        return $this->belongsToMany(Categories::class,'categories_news_connection','news_id','category_id');
    }

    public function get_rubrics()
    {
        return $this->belongsToMany(Rubric::class,'news_rubrics_connection','news_id','rubric_id');
    }

}
