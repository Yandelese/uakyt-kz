<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='pages';

    protected $id;
    protected $title;
    protected $content;
}