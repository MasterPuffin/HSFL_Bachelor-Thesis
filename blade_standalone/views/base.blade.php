<!doctype html>
<html lang="de">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="{{ RESOURCESROOT }}/.assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ RESOURCESROOT }}/.assets/custom.css" rel="stylesheet">

	<title>Hello, world!</title>
</head>
<body>

<div class="container">
	<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
		<a href="{{ WEBROOT }}/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
			<img src="{{ RESOURCESROOT }}/.assets/images/HSFL_Icon.png" height="32px" alt="Logo">
			<span class="fs-4">Company</span>
		</a>
		<ul class="nav nav-pills">
            @foreach ($nav as $navItem)
			<li class="nav-item"><a href="{{ WEBROOT }}/{{ $navItem[1] }}/" class="nav-link">{{ $navItem[0] }}</a></li>
            @endforeach
		</ul>
	</header>
	<main>
        @yield('main')
	</main>
	<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
		<div class="col-md-4 d-flex align-items-center">
			<span class="text-muted">© 2021 Company, Inc</span>
		</div>
		<script src="{{ RESOURCESROOT }}/.assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	</footer>
</div>
</body>
</html>