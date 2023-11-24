<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{   
    // << 호철 >> 
    public function loginget()
    {
        if(Auth::check()) {
        return redirect()->route('board.index');
        }

        return view('login');
    }

    public function loginpost(Request $request)
    {
         // // 유효성 검사
        $validator = Validator::make(
             $request->only('email', 'password') // 아이디 비밀번호
             ,[ 
                 'email' => 'required|email|max:50' 
                 ,'password' => 'required'
             ]
        );

        // //유효성 검사 실패시 처리
         if($validator->fails()){
             return view('login')->withErrors($validator->errors());
        }

        //유저 정보 습득
        $result = User::where('email', $request->email)->first();
        if(!$result || !(Hash::check($request->password, $result->password))) {
            $errorMsg = '아이디와 비밀번호를 다시 확인해 주세요.';
            return view('login')->withErrors($errorMsg);
        }
        
        // 유저 인증작업
        Auth::login($result); 
        if(Auth::check()) { // Auth 확인하는 방법
            session($result->only('id'));
        } else {
            $errorMsg = '인증 에러가 발생했습니다.';
            return view('login')->withErrors($errorMsg);
        }
        

        return redirect()->route('board.index');
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

    public function Logoutget() {
        Session::flush(); // 세션파기
        Auth::logout(); // 로그아웃
        return redirect()->route('user.login.get');
    }
}
