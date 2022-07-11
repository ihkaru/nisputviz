<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', function (){
    return redirect("/dash/1");
});
Route::get('/dash/{id}', [FrontController::class,"dash"]);
Route::get('/login', function (){
    return redirect("/admin/login");
})->name("login");
