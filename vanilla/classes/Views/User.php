<?php

namespace Views;

use HTML;

class User {
	static function page(int $id) {
		$user = new \User($id);
		$news = \News::getForUser($user->id);
		?>
        <!doctype html>
        <html lang="de">
		<?php HTML::head() ?>
        <body>

        <div class="container">
			<?php HTML::header(); ?>
            <main>
                <h1><?= $user->name ?></h1>
                <hr class="mt-2 mb-4">
                <div class="row">
                    <div class="col-6">
                        <h4><?= $user->department ?></h4>
                        <p>Abteilung</p>
                        <h4><?= $user->phone ?></h4>
                        <p>Telefon</p>
                        <h4><?= $user->email ?></h4>
                        <p>E-Mail</p>
                    </div>
                    <div class="col-6">
                        <img class="img-fluid rounded mx-auto d-block mb-4" alt="image"
                             src="<?= resolveImage($user->image) ?>">

                    </div>
                    <hr class="mt-2 mb-4">
                    <h3 class="mb-4">Letzte News</h3>
	                <?php
	                foreach ($news as $newsItem) {
		                ?>
                        <div class="col-md-3 mb-4">
                            <div class="card ">
                                <img src="<?= resolveImage($newsItem->image)?>" class="card-img-top" alt="Image">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $newsItem->title ?></h5>
                                    <p class="card-text"><?= truncate($newsItem->text, 100) ?></p>
                                    <a href="<?= WEBROOT ?>/news/<?= $newsItem->id ?>/" class="btn btn-primary stretched-link">
                                        Mehr lesen
                                    </a>
                                </div>
                            </div>
                        </div>
		                <?php
	                }
	                ?>
                </div>
            </main>
			<?php HTML::footer(); ?>
        </div>
        </body>
        </html>
		<?php
	}
}