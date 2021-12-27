<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/message/save',[MessageController::class,'MessageSave'])->name('message.save');
Route::get('/message/list', [MessageController::class, 'getMessage'])->name('message.list');
Route::post('/message/delete', [MessageController::class, 'MessageDelete'])->name('message.delete');



// Route::get('/register', function() {
//     return redirect('/');
// });

