<?php

use App\Http\Controllers\KaryawanController;
use App\Models\DataKaryawan;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('homePage');
});

Route::get('/datakaryawan', [KaryawanController::class, 'show']);
Route::post('/datakaryawan/add', [KaryawanController::class, 'add']);

Route::get('/datakaryawan/edit/{data:id}', [KaryawanController::class, 'edit']);
Route::post('/datakaryawan/update/{data:id}', [KaryawanController::class, 'update']);

Route::get('/datakaryawan/delete/{data:id}', [KaryawanController::class, 'delete']);

Route::get('/datakaryawan/info/{data:id}', [KaryawanController::class, 'info']);

Route::get('/tes/{data:id}', [KaryawanController::class, 'tes']);
