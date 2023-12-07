@extends('layout.layout')

@section('title', 'create')

@section('main')
<main>
	<form action="{{route('board.store')}}" method="POST">
	@csrf
	<div class="form-structor">
		<div class="signup">
			<h2 class="form-title" id="signup">고객센터</h2>
			<div class="form-holder">
				<div>
					<input type="text" placeholder="제목을 입력하세요" name="b_title">
					<textarea name="b_content" id="b_content" cols="30" rows="10" placeholder="내용입력하세요"></textarea>
				</div>
			</div>
			<button class="submit-btn" type="submit">글작성</button>
			<button class="submit-btn" type="button" onclick="location.href='{{route('board.index')}}'">나가기</button>
		</div>
	</div>
	</form>
</main>
@endsection