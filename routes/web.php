<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/admin' , function () {
//     $users = [
//         [ 'name' => 'ahmed' , 'age' => 20 , "id" => '1' , "skill" => 55],
//         [ 'name' => 'mohamed' , 'age' => 25 , "id" => '2' , "skill" => 60],
//         [ 'name' => 'ali' , 'age' => 30 , "id" => '3' , "skill" => 70],
//         [ 'name' => 'omar' , 'age' => 35 , "id" => '4' , "skill" => 80]
//     ];

//     return view('admin.admin' , [ 'greeting' => 'hello' , 'users' => $users]);
// });

// Route::get('user/create' , function () {
//     // create user
//     return view('admin.create');
// });

// // route wildcards
// Route::get('/admin/{id}' , function ($id) {
//     // fetch record with id
//     return view('admin.show' , [ "id" => $id]);
// });


// fetch record from ninja controller
Route::get('/ninjas' , [NinjaController::class , 'index']); // func name

Route::get('/ninjas/{id}' , [NinjaController::class , 'show']);

Route::get('/ninjas/create' , [NinjaController::class , 'create']);

