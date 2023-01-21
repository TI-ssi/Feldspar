<div class="card my-3 {{ $excerpt ? 'pointer' : ''}}" wire:click="showPost">
    <div class="card-body">
	@if($excerpt)
	    <div class="card-title row">
		<div class="col fs-5">{{ $post->title }}</div>
		<div class="col text-end"> {{ $post->author->name }} - {{ $post->published_from }}</div>
	    </div>
	@else
	    <h5 class="card-title">{{ $post->title }}</h5>
	    <h6 class="card-subtitle mb-2 text-muted">{{ $post->author->name }} - {{ $post->published_from }}</h6>
	@endif
	<p class="card-text">{!! $excerpt && strlen($post->content) > 100 ? substr($post->content, 0, 100).'...' : $post->content !!}</p>
    </div>
</div>
