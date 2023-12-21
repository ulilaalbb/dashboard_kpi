<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testcaseController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;
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
// HOME PAGE
// Route::get('/', function () {
//     return view('welcome');
//     // return view('layouts.master');
// })->name('home');


Route::get('/', [MainController::class, 'login_page'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [MainController::class, 'register'])->name('register');
// Route::get('/home', [MainController::class, 'index'])->name('home');



Route::get('/create_test', function () {
    return view('testcase/content_create_test');
})->name('createtest');

Route::get('/all_testcase', [testcaseController::class, 'index'])->name('alltestcase');

Route::get('/activity', [ActivityController::class, 'index'])->name('act');
Route::get('/activity/create', [ActivityController::class, 'create']);
Route::post('/activity/store', [ActivityController::class, 'store']);

// test case
Route::get('/test_case', [testcaseController::class, 'index']);
Route::get('/test_case/create', [testcaseController::class, 'create']);
Route::get('/draft', [testcaseController::class, 'drafts'])->name('draft');
Route::post('/test_case/store', [testcaseController::class, 'store']);
Route::get('/test_case/{id}/edit',  [testcaseController::class, 'edit']);
Route::put('/test_case/{id}',  [testcaseController::class, 'update']);
Route::any('/test_case/{id}/submit', [testcaseController::class, 'submit']);
Route::delete('/test_case/{id}/delete', [testcaseController::class, 'delete']);

// Route::get('/home', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [MainController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
