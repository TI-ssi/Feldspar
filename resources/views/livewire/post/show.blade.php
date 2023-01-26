<div class="my-3 rounded border-2 p-3 {{ $excerpt ? 'pointer' : ''}}" wire:click="showPost">
    <div class="card-body">
	@if($excerpt)
	    <div class="flex justify-between">
		<div class="text-lg">{{ $post->title }}</div>
		<div class="text-end"> {{ $post->author->name }} - {{ $post->published_from }}</div>
	    </div>
	@else
	    <h5 class="text-lg">{{ $post->title }}</h5>
	    <h6 class="text-sm mb-2 text-muted">{{ $post->author->name }} - {{ $post->published_from }}</h6>
	@endif
	<p >{!! $excerpt && strlen($post->content) > 100 ? substr($post->content, 0, 100).'...' : $post->content !!}</p>
    </div>
</div>
