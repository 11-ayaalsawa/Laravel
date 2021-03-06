<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandyStore;

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

// Route::get('/aya', function () {
//     return 'welcome';
// });

// Route::get('/marwa', function ($marwa='marwa') {
    
//     return $marwa;
// });

// Route::get('/candy', function () {
//     return view('candy');
// });


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('aya/id/{id}/name/{name}', [CandyStore::class, 'index'] )->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/candy', [CandyStore::class,'candy'] );


Route::get('/about', [CandyStore::class,'about'] );


Route::get('/contact', [CandyStore::class,'contact'] );


Route::get('/login', [CandyStore::class,'login'] );


Route::get('/register', [CandyStore::class,'register'] );

Route::get('/blog', [CandyStore::class, 'fetch']);

Route::get('delete-data/id/{id}', [CandyStore::class, 'destroy']);

Route::get('edit-data/id/{id}', [CandyStore::class, 'edit']);
Route::put('update-data/id/{id}', [CandyStore::class, 'update']);
Route::get('add-data', [CandyStore::class, 'add']);
Route::post('add-data', [CandyStore::class, 'create']);