@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
	@livewire('post.show', ['post' => $post, 'excerpt' => true])
    @endforeach

    <div class="d-grid gap-2 justify-content-center">
	{{ $posts->links() }}
    </div>
@endsection
