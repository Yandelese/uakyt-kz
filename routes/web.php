<?php


use App\Http\Controllers\app\News\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\app\Contacts\ContactsController;
use App\Http\Controllers\app\Rules\RulesController;
use App\Http\Controllers\app\Categories\CategoriesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  [NewsController::class, 'index'])->name('mainpage');

Route::get('/contacts',  [ContactsController::class, 'index'])->name('contacts');
Route::get('rules',      [RulesController::class, 'index'])->name('rules');
Route::get('categories{category_id}', [CategoriesController::class, 'index'])->name('categories_all');
Route::get('each_news{news_id}',[NewsController::class, 'show'])->name('each_news');
