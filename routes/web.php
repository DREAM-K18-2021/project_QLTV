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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[\App\Http\Controllers\LoginController::class,'login']);
/*
 * index
 */
Route::get('/layout/docgia', [\App\Http\Controllers\DocgiaController::class, 'index']);
Route::get('/layout/muonsach', [\App\Http\Controllers\MuonsachController::class, 'index']);
Route::get('/layout/index', [\App\Http\Controllers\SachController::class, 'index']);
Route::get('/layout/sachdamuon', [\App\Http\Controllers\SachdamuonController::class, 'index']);
Route::get('/layout/theloai', [\App\Http\Controllers\TheloaiController::class, 'index']);

/*
 *detail add
 */
Route::get('/add/themsach', [\App\Http\Controllers\SachController::class, 'detailAddSach']);
Route::get('/add/theloai', [\App\Http\Controllers\TheloaiController::class, 'detailAdd']);
Route::get('/add/docgia', [\App\Http\Controllers\DocgiaController::class, 'detailAdd']);
/*
 *detail edit
 */
Route::get('/edit/chinhsuasach/{id}', [\App\Http\Controllers\SachController::class, 'detailEdit']);
Route::get('/edit/chinhsuatheloai/{id}', [\App\Http\Controllers\TheloaiController::class, 'detailEdit']);
Route::get('/edit/docgia/{id}', [\App\Http\Controllers\DocgiaController::class, 'editDocgia']);
/*
 * edit
 */
Route::post('/edit-sach/{id}', [\App\Http\Controllers\SachController::class, 'edit']);
Route::post('/edit-theloai/{id}', [\App\Http\Controllers\TheloaiController::class, 'edit']);
Route::post('/edit-docgia/{id}', [\App\Http\Controllers\DocgiaController::class, 'edit']);

/*
 * add
 */
Route::post('/add-sach', [\App\Http\Controllers\SachController::class, 'add']);
Route::post('/add-theloai', [\App\Http\Controllers\TheloaiController::class, 'add']);
Route::post('/add-muonsach', [\App\Http\Controllers\MuonsachController::class, 'add']);
Route::post('/add-docgia', [\App\Http\Controllers\DocgiaController::class, 'add']);

/*
 *delete
 */
Route::get('/delete/sach/{id}', [\App\Http\Controllers\SachController::class, 'delete']);
Route::delete('/delete/theloai/{id}', [\App\Http\Controllers\TheloaiController::class, 'delete']);
Route::delete('/delete/trasach/{id}', [\App\Http\Controllers\SachdamuonController::class, 'delete']);
Route::delete('/delete/docgia/{id}', [\App\Http\Controllers\DocgiaController::class, 'delete']);
/*
 *login-register-logout
 */

Route::post('/login-register',[\App\Http\Controllers\LoginController::class,'postLogin'])->name('postLogin');
Route::get('/logout',[\App\Http\Controllers\LoginController::class,'logout']);
Route::get('/register',[\App\Http\Controllers\RegisterController::class,'index']);
Route::post('/add-register',[\App\Http\Controllers\RegisterController::class,'add'])->name('postRegister');

