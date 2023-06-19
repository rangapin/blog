<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/articles', [PostController::class, 'index']);
route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id');
route::get('/contact', [PostController::class, 'contact']);


/* Route::get('/', function () {
    return view('articles');
}); */

/* Route::get('/posts', function () { // slash is not necessary
    return view('Liste d\'articles');
});

//return Json
Route::get('/json', function () { // slash is not necessary
    return response()->json([
        'title' => 'my title',
        'description' => 'my description'
    ]);
});
//return another view
Route::get('/articles', function () {
    return view('articles');
}); */
