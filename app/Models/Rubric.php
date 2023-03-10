<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='rubric';

    protected $id;
    protected $name;
    protected $status;

    public function get_news()
    {
        return $this->belongsToMany(News::class,'news_rubrics_connection','rubric_id','news_id');
    }
}
