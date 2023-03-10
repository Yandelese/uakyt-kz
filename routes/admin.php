<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\News\NewsController;
use App\Http\Controllers\Admin\Categories\CategoriesController;
use App\Http\Controllers\Admin\Pages\PagesController;
use App\Http\Controllers\Admin\Rubric\RubricController;

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=> 'Admin'], function () {
    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/categories',  [CategoriesController::class, 'index'])->name('categories');
    Route::get('/create-categories',  [CategoriesController::class, 'create'])->name('create-categories');
    Route::post('/add_categories_to_db',  [CategoriesController::class, 'store'])->name('add_categories_to_db');
    Route::get('/edit-categories{category_id}',  [CategoriesController::class, 'show'])->name('edit-categories');
    Route::post('/update-categories{category_id}',  [CategoriesController::class, 'update'])->name('update-categories');
    Route::get('/delete-categories{category_id}',  [CategoriesController::class, 'destroy'])->name('delete-categories');

    Route::get('/allnews',  [NewsController::class, 'index'])->name('allnews');
    Route::get('/create-news',  [NewsController::class, 'create'])->name('create-news');
    Route::post('/add-news-to-db',  [NewsController::class, 'store'])->name('add_news_to_db');
    Route::get('/edit-news{news_id}',  [NewsController::class, 'show'])->name('edit-news');
    Route::get('/delete-news{news_id}',  [NewsController::class, 'destroy'])->name('delete-news');
    Route::post('/update-news{news_id}',  [NewsController::class, 'update'])->name('update-news');



    Route::get('/pages-list',  [PagesController::class, 'index'])->name('allpages');
    Route::get('/create-pages',  [PagesController::class, 'create'])->name('create-pages');
    Route::post('/add-pages-to-db',  [PagesController::class, 'store'])->name('add_pages_to_db');
    Route::get('/edit-pages{pages_id}',  [PagesController::class, 'show'])->name('edit-pages');
    Route::get('/delete-pages{pages_id}',  [PagesController::class, 'destroy'])->name('delete-pages');
    Route::post('/update-pages{news_id}',  [PagesController::class, 'update'])->name('update-pages');

    Route::get('/rubric-list',  [RubricController::class, 'index'])->name('rubric');
    Route::get('/create-rubric',  [RubricController::class, 'create'])->name('create-rubric');
    Route::post('/add_rubric-to-db',  [RubricController::class, 'store'])->name('add_rubric_to_db');
    Route::get('/edit-rubric{rubric_id}',  [RubricController::class, 'show'])->name('edit-rubric');
    Route::get('/delete-rubric{rubric_id}',  [RubricController::class, 'destroy'])->name('delete-rubric');
    Route::post('/update-rubric{rubric_id}',  [RubricController::class, 'update'])->name('update-rubric');
});
