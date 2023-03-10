<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Categories_News extends Model
{
    protected $guarded = [];
    protected $table='categories_news_connection';

    protected $news_id;
    protected $category_id;



}
