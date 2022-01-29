<div class="col-md-3 my-4">
	<div class="card">
		<img src="{{ resolveImage($newsItem->image) }} " class="card-img-top" alt="Image">
		<div class="card-body">
			<h5 class="card-title">{{ $newsItem->title }} </h5>
			<p class="card-text">{{ truncate($newsItem->text, 100) }}</p>
			<a href="{{ WEBROOT }}/news/{{ $newsItem->id }}/"
			   class="btn btn-primary stretched-link">
				Mehr lesen
			</a>
		</div>
	</div>
</div>