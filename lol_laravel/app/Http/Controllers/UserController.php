<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{   
    // << 호철 >> 
    public function loginget()
    {
        //
    }

    public function loginpost()
    {
        //
    }
    
    // << 중기 >>
    public function RegisterGet()
    {
        return view('register');
    }

    public function RegisterPost(Request $request)
    {
        $UserInfo = $request->only('email', 'password', 'name', 'tel');
        // 배열형태의 $request의 값에 대해 only내 데이터 확인가능
        $UserInfo['password'] = Hash::make($UserInfo['password']); 
        // 비밀번호 암호화하여 저장
        $result = User::create($UserInfo);
        // create 메소드 호출>이메일, 비밀번호, 이름, 휴대폰번호 DB insert 처리
        return redirect()->route('user.login.get');
    }

    public function update(Request $request, $id)
    {
        //
    }
}
