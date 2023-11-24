<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('login');
});

// 유저 로그인&회원가입

// << 호철 >>
Route::get('/user/login', [UserController::class, 'loginget'])->name('user.login.get'); 
// 로그인 화면 이동
Route::post('/user/login', [UserController::class, 'loginpost'])->name('user.login.post'); 
// 로그인 처리

// << 중기 >>
Route::get('/user/register', [UserController::class, 'RegisterGet'])->name('user.register.get'); 
// 회원가입 화면이동
Route::middleware('user.info.validation')->post('/user/register', [UserController::class, 'RegisterPost'])->name('user.registrer.post'); 
// 회원가입 처리
Route::get('/user/logout', [UserController::class, 'LogoutGet'])->name('user.logout.get'); 
// 로그아웃 처리
