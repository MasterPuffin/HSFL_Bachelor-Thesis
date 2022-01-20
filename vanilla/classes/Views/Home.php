<?php

namespace Views;

class Home {
	static function page() {
		?>
        <!doctype html>
        <html lang="de">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <title>Hello, world!</title>
        </head>
        <body>

        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <img src="../assets/images/HSFL_Icon.png" height="32px" alt="Logo">
                    <span class="fs-4">Simple header</span>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                </ul>
            </header>
            <main>
                <h1>Hello, world!</h1>
            </main>
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <span class="text-muted">© 2021 Company, Inc</span>
                </div>
            </footer>
        </div>


        <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
		<?php
	}

}