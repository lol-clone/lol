@extends('layout.layout')

@section('title', '회원가입')

@section('main')

<main>
    <form action="{{route('user.registrer.post')}}" method="post">
        @csrf
        <div class="form-structor">
			<div class="signup">
				<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
				<div class="form-holder">
					<input type="text" class="input" id="name" name="name" placeholder="이름" />
					<input type="email" class="input" id="email" name="email" placeholder="이메일" />
					<input type="password" class="input" id="password" name="password" placeholder="비밀번호" />
					<input type="password" class="input" id="passwordchk" name="passwordchk" placeholder="비밀번호 확인" />
					<input type="tel" class="input" id="tel" name="tel" placeholder="휴대폰 번호 입력" />
				</div>
				<button class="submit-btn">가입하기</button>
                <button class="submit-btn" type="button" onclick="location.href='{{route('user.login.get')}}'">나가기</button>
			</div>
			{{-- <div class="login slide-up">
				<div class="center">
                    <a href="{{route('user.login.get')}}">나가기</a>
				</div>
			</div> --}}
		</div>
    </form>
</main>

@endsection