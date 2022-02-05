<?php
?>
<div class="col-md-3 my-4">
	<div class="card">
		<img src="{{ image }}" class="card-img-top" alt="Image">
		<div class="card-body">
			<h5 class="card-title">{{ title }} </h5>
			<p class="card-text">{{ text }}</p>
			<a href="{{ WEBROOT }}/news/{{ id }}/"
			   class="btn btn-primary stretched-link">
				Mehr lesen
			</a>
		</div>
	</div>
</div>

