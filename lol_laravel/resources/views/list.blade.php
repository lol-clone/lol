@extends('layout.layout')

@section('title', 'list')

@section('main')
<main>
	<div class="form-structor">
		<div class="signup">
			<h2 class="form-title" id="signup">고객센터</h2>
			<div class="form-holder">
				@forelse($data as $item)
					<div>
						<h2>{{ $item->b_title }}</h2>
						<p>{{ $item->b_content }}</p>
					</div>
				@empty
					<div>게시글 없음</div>
				@endforelse
			</div>
			<button class="submit-btn" type="button" onclick="location.href='{{route('board.create')}}'">문의하기</button>
		</div>
	</div>
</main>
@endsection