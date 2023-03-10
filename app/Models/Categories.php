<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    use HasFactory;
    protected $guarded = [];
    protected $table='categories';

    protected $id;
    protected $name;
    protected $status;

    public function get_news()
    {
        return $this->belongsToMany(News::class,'categories_news_connection','category_id','news_id');
    }
}
