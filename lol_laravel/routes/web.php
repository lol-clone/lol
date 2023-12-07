<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoardController;


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
Route::post('/user/register', [UserController::class, 'RegisterPost'])->name('user.registrer.post'); 
// 회원가입 처리
Route::get('/user/logout', [UserController::class, 'LogoutGet'])->name('user.logout.get'); 
// 로그아웃 처리


// 보드 관련 라우터
Route::resource('/board',BoardController::class);

// GET|HEAD        board ............. board.index › BoardController@index  리스트 화면 이동 처리
// POST            board ............. board.store › BoardController@store  글작성 처리
// GET|HEAD        board/create ...... board.create › BoardController@create 작성 페이지 이동 처리  
// GET|HEAD        board/{board} ..... board.show › BoardController@show  상세페이지 이동 처리
// PUT|PATCH       board/{board} ..... board.update › BoardController@update 업데이트 처리
// DELETE          board/{board} ..... board.destroy › BoardController@destroy  삭제 처리
// GET|HEAD        board/{board}/edit . board.edit › BoardController@edit  수정페이지 이동 처리
