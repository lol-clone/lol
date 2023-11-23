@extends('layout.layout')

@section('title', '회원가입')

@section('main')

<main>
    <form action="" method="post">
        @csrf
        <p>회 원 가 입</p>
        <div>
            <label for="email" class="">이메일</label>
            <input type="text" class="" id="email" name="email" autocomplete="off">
        </div>
        <div>
            <label for="password" class="">비밀번호</label>
            <input type="password" class="" id="password" name="password" autocomplete="off">
        </div>
        <div>
            <label for="password_confirmation" class="">비밀번호 확인</label>
            {{-- password_confirmation : 유효성 검사실패 시 inpu 박스 테두리 붉게 변경 --}}
            <input type="password" class="" id="password_confirmation" name="password_confirmation" autocomplete="off">
        </div>
        <div>
            <label for="name" class="">이름</label>
            <input type="text" class="" id="name" name="name" autocomplete="off">
        </div>
        <div>
            <label for="tel" class="">휴대폰번호</label>
            <input type="tel" class="" id="tel" name="tel" autocomplete="off">
        </div>
        <a href="#">취소</a>
        <button>회원가입</button>
    </form>
</main>

@endsection