<?php

class HTML {
	public static function head() {
		?>
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="<?= WEBROOT ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="<?= WEBROOT ?>/assets/custom.css" rel="stylesheet">

            <title>Hello, world!</title>
        </head>
		<?php
	}

	public static function header() {
		$nav = [
			["Home", "home"],
			["News", "news"],
			["Mitarbeiter", "users"],
			["Kontakt", "contact"],
		]
		?>
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="<?= WEBROOT?>/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="<?= WEBROOT ?>/assets/images/HSFL_Icon.png" height="32px" alt="Logo">
                <span class="fs-4">Simple header</span>
            </a>
            <ul class="nav nav-pills">
				<?php
				foreach ($nav as $navItem) {
					echo '<li class="nav-item"><a href="' . WEBROOT . '/' . $navItem[1] . '/" class="nav-link">' . $navItem[0] . '</a></li>';
				}
				?>
            </ul>
        </header>
		<?php
	}

	public static function footer() {
		?>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="text-muted">© 2021 Company, Inc</span>
            </div>
            <script src="<?= WEBROOT ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        </footer>
		<?php
	}

}