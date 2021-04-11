<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\ImageUploadController;


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



Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/post/create', function () {
   DB::table('post')->insert([
   'title'=>'Save Earth.',
   'body'=>'Earth and the resources of earth make life possible on it. If we were to imagine our lives without these resources, that would not be possible.'
   ]);
});
Route::get('/post', function () {
   $post= Post::find(1);
   return $post;
});
Route::get('/blog/index',[BlogController::class,'index']);
Route::get('/blog/create', function () {
    return view('blog/create');
});
Route::post('/blog/create', [BlogController::class, 'store'])->name('add-blog');
Route::get('/blog/{id}', [BlogController::class, 'get_blog']);

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/uploadfile','UploadFileController@index');
Route::post('uploadfile','UploadFileController@showUploadFile');



Route::get('image-upload', 'App\Http\Controllers\ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'App\Http\Controllers\ImageUploadController@imageUploadPost')->name('image.upload.post');





Route::get('/form', 'App\Http\Controllers\FormController@index');
Route::post('/addimage', 'App\Http\Controllers\FormController@store')->name('addimage');

Route::get('mail/send', 'App\Http\Controllers\MailController@send');


Route::get('/form/{lang}', function ($lang){
  App::setlocale($lang);
    return view('/form');
  });


Route::get('/{lang}', function ($lang){
  App::setlocale($lang);
    return view('/home');
  });

Route::get('/{lang}','App\Http\Controllers\LocalizationController@index' );