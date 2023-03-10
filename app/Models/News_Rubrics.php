<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class News_Rubrics extends Model
{
    protected $guarded = [];
    protected $table='news_rubrics_connection';

    protected $news_id;
    protected $rubric_id;
}
