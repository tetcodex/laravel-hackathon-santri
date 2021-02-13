<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;

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
    $dataView = view('home');
    return $dataView;
});

Route::get('/login', function () {
    $dataView = view('login.index');
    return $dataView;
});

Route::prefix('company')->group(function () {
    Route::resources([
        '/'           => DashboardController::class,
        '/job'        => JobController::class,
        '/course'     => CourseController::class,
    ]);
});
