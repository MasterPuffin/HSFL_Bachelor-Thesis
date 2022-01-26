<?php

namespace Views;

use HTML;

class News {
	static function page(int $id) {
		$user = new \User(1, true, "John Doe", null, "Sales", null, null);
		$news = new \News($id);
		?>
        <!doctype html>
        <html lang="de">
		<?php HTML::head() ?>
        <body>

        <div class="container">
			<?php HTML::header(); ?>
            <main>
                <h1><?= $news->title ?></h1>
                <hr class="mt-2 mb-4">
                <img class="img-fluid rounded mx-auto d-block mb-4" alt="image" src="<?= resolveImage($news->image) ?>">
                <p class="text-end"><strong><?= date("d.m.Y", $news->timestamp) ?></strong></p>
                <p><?= $news->text ?></p>
                <hr class="">
                <div class="row position-relative">
                    <a href="<?= WEBROOT ?>/users/<?= $news->author->id ?>/" class="stretched-link"></a>
                    <div class="col-1">
                        <img class="img-user rounded-circle" alt="image"
                             src="<?= resolveImage($news->author->image) ?>">
                    </div>
                    <div class="col-11">
                        <h4 class=" mt-2"><?= $news->author->name ?></h4>
                        <p class="mb-0"><?= $news->author->department ?></p>
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