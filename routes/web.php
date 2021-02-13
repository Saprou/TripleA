<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('layouts.about');
});
Route::get('visit', function () {
    return view('layouts.visit');
});
Route::get('menu', function () {
    return view('layouts.menu');
});
Route::get('gallery', function () {
    return view('layouts.gallery');
});
Route::get('contact', function () {
    return view('layouts.contact');
});
Route::get('item/{name}',function($name){
    return view('layouts.item',[
        'name'=>$name,
        'id'=>'104',
        'items'=>['onion','tomato','qq']
        ]);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
