@extends('layout.layout')

@section('title', 'login')

@section('main')
<main>
    <form action="{{route('user.login.post')}}" method="POST">
        @include('layout.errolayout')
        @csrf
        <div>
            <label for="email" class="">이메일</label>
            <input type="text" class="" id="email" name="email" autocomplete="off">
        </div>
        <div>
            <label for="password" class="">비밀번호</label>
            <input type="password" class="" id="password" name="password">
        </div>
        <button type="submit" class="login-btn">로그인</button>
    </form>
</main>

@endsection