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


// fetch record from ninja controller     // controller function name
//                                                   |
Route::prefix('/')->group(function () {
    Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninjas.index'); // names routes

    Route::get('/ninjas/{ninja}', [NinjaController::class, 'show'])->name('ninjas.show');

    Route::get('/add', [NinjaController::class, 'add'])->name('ninjas.add');

    Route::post('/ninjas' , [NinjaController::class, 'store'])->name('ninjas.store');

    Route::delete('/ninjas/{ninja}', [NinjaController::class, 'destroy'])->name('ninjas.destroy');
});
