<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SettingeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController as Front;
use App\Http\Controllers\Admin\HomeController as Admin;

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

Route::get('/',[Front::class,"index"])->name("front.home");
Route::get("/category/{id}",[CourseController::class,"category"])->name("front.category");
Route::get("/category/{id}/course/{c_id}",[CourseController::class,"show"])->name("front.course");
Route::get("/contact",[SettingeController::class,"index"])->name("front.contact");
Route::post("/message/contact",[MessageController::class,"contact"])->name("front.message.contact");
Route::post("/message/enroll",[MessageController::class,"enroll"])->name("front.message.enroll");

Route::get('/dashboard',[Admin::class,"index"])->name("admin.home");
Route::get('/dashboard/login',[AuthController::class,"login"])->name("admin.auth.login");
Route::post('/dashboard/do_login',[AuthController::class,"do_login"])->name("admin.auth.do_login");
Route::get('/dashboard/logout',[AuthController::class,"logout"])->name("admin.auth.logout");

Route::get('/dashboard/categories',[CategoryController::class,"index"])->name("admin.categories.index");
Route::get('/dashboard/categories/create',[CategoryController::class,"create"])->name("admin.categories.create");
Route::post('/dashboard/categories/store',[CategoryController::class,"store"])->name("admin.categories.store");

Route::get('/dashboard/categories/edit/{id}',[CategoryController::class,"edit"])->name("admin.categories.edit");
Route::post('/dashboard/categories/update/{id}',[CategoryController::class,"update"])->name("admin.categories.update");

Route::get('/dashboard/categories/delete/{id}',[CategoryController::class,"delete"])->name("admin.categories.delete");



