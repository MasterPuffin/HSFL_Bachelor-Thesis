<?php

namespace Views;

use HTML;

class Home {
	static function page() {
		?>
        <!doctype html>
        <html lang="de">
        <?php HTML::head() ?>
        <body>

        <div class="container">
            <?php HTML::header(); ?>
            <main>
                <h1>Hello, world!</h1>
            </main>
            <?php HTML::footer(); ?>
        </div>
        </body>
        </html>
		<?php
	}

}