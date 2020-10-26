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

Route::get('/employeelist', [\App\Http\Controllers\EmployeeController::class, 'index']);

Route::get('/employeelist/{id}/edit', [\App\Http\Controllers\EmployeeController::class, 'edit']) -> name("employees.edit");

Route::put('employeelist/{id}/update', [\App\Http\Controllers\EmployeeController::class, 'update']) -> name('employees.update');
