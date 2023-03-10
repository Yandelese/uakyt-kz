<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.layout.admin');
    }

}
