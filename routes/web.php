<?php

use App\Http\Controllers\PageController;
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

// Route::get('/index', function () {
//     return view('admin.bonbon');
// });

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/menu', [PageController::class, 'menu'])->name('menu');

Route::get('/qr/{table?}', [PageController::class, 'qrCode'])->name('qr');
