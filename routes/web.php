<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
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


// Route yang beralamatkan / dengan menjalankan fungsi dari pengembalian tulisan page home
Route::get('/', function () {
 return view('home');
});

// Route::get('/user', 'ManagementUserController@index');
//Route::get('index', [ManagementUserController::class, 'index']);
//Route::resource('/user', 'ManagementUserController');

//route ini mendapatkan alamat user dengan menampilkan tampilan yang ada pada method index
Route::get('user', [ManagementUserController::class, 'index']);
//route yang beralamatkan user/create untuk menampilkan tampilan yang ada pada methode create
Route::get('user/create',[ManagementUserController::class,'create']);
//route yang beralamatkan user/1/create untuk menampilkan tampilan yang ada pada methode edit
Route::get('user/1/edit', [ManagementUserController::class, 'edit']);
//route yang beralamatkan user/store untuk menampilkan tampilan yang ada pada methode store
Route::get('user/store', [ManagementUserController::class, 'store']);

Route::get('user/1/show', [ManagementUserController::class, 'show']);

Route::get('user/1/update', [ManagementUserController::class, 'update']);

Route::get('user/1/destroy', [ManagementUserController::class, 'destroy']);
   // route yang beralamatkan  /home untuk menampilkan fungsi dari pemngembalian pada folder view dengan file home
   Route::get('/home', function(){
    return view('home');
 });




    
