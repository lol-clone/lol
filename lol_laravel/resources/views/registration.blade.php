@extends('layout.layout')

@section('title', 'Registration')

@section('main')

<main>
    <form action="" method="post">
        <div>
            <label for="email" class="">아이디</label>
            <input type="text" class="" id="email" name="email" autocomplete="off">
        </div>
        <div>
            <label for="password" class="">비밀번호</label>
            <input type="password" class="" id="password" name="password" autocomplete="off">
        </div>
        <div>
            <label for="passwordcheck" class="">비밀번호 확인</label>
            <input type="password" class="" id="passwordcheck" name="passwordcheck" autocomplete="off">
        </div>
        <div>
            <label for="name" class="">이름</label>
            <input type="text" class="" id="name" name="name" autocomplete="off">
        </div>
        <a href="#">취소</a>
        <button>회원가입</button>
    </form>
</main>

@endsection