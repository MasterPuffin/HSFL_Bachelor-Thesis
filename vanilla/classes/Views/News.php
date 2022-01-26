<?php

namespace Views;

use HTML;

class News {
	static function page(int $id) {
		$user = new \User(1, true, "John Doe", null, null, null, null);
		new \News(1, "Lorem Ipsum", time(), null, $user, loremIpsum());
		?>
        <!doctype html>
        <html lang="de">
		<?php HTML::head() ?>
        <body>

        <div class="container">
			<?php HTML::header(); ?>
            <main>
                <h1>News</h1>
            </main>
			<?php HTML::footer(); ?>
        </div>
        </body>
        </html>
		<?php
	}
}