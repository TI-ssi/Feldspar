@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
	@livewire('post.show', ['post' => $post])
    @endforeach

    <div class="flex">
	<a href="{{ route('blog') }}" class="p-1 w-full bg-blue-500 rounded text-center">View more</a>
    </div>
@endsection
