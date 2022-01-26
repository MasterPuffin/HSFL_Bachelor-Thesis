<?php

namespace Views;

use HTML;

class Error {
	static function page() {
		?>
        <!doctype html>
        <html lang="de">
		<?php HTML::head() ?>
        <body>

        <div class="container">
			<?php HTML::header(); ?>
            <main>
                <div class="d-flex justify-content-center h-50">
                    <div class="text-center">
                        <h1>404</h1>
                        <p>Die angeforderte Seite wurde nicht gefunden</p>
                    </div>
                </div>
            </main>
			<?php HTML::footer(); ?>
        </div>
        </body>
        </html>
		<?php
	}

}