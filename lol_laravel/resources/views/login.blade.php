@extends('layout.layout')

@section('title', 'login')

@section('main')
<main>
    <form action="{{route('user.login.post')}}" method="POST">
        {{-- @include('layout.errolayout') --}}
        @csrf
        <div class="form-structor">
			<div class="signup">
				<h2 class="form-title" id="signup">Log in</h2>
				<div class="form-holder">
					<input type="email" class="input" id="email" name="email" placeholder="Email" />
					<input type="password" class="input" id="password" name="password" placeholder="Password" />
				</div>
				<button class="submit-btn">로그인</button>
				<button class="submit-btn" type="button" onclick="location.href='{{route('user.register.get')}}'">회원가입</button>
			</div>
		</div>
    </form>
</main>

@endsection