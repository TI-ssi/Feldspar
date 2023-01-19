@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
	@livewire('post.show', ['post' => $post])
    @endforeach

    <div class="d-grid gap-2">
	<a href="{{ route('blog') }}" class="btn btn-primary">View more</a>
    </div>
@endsection
