<?php

namespace Views;

use HTML;

class NewsGrid {
	static function page() {
		$user = new \User(1, true, "John Doe", null, null, null, null);
		$news = [
			new \News(1, "Lorem Ipsum", time(), null, $user, loremIpsum()),
			new \News(1, "Lorem Ipsum", time(), null, $user, loremIpsum()),
			new \News(1, "Lorem Ipsum", time(), null, $user, loremIpsum()),
			new \News(1, "Lorem Ipsum", time(), null, $user, loremIpsum()),
			new \News(1, "Lorem Ipsum", time(), null, $user, loremIpsum()),
			new \News(1, "Lorem Ipsum", time(), null, $user, loremIpsum()),
			new \News(1, "Lorem Ipsum", time(), null, $user, loremIpsum()),
			new \News(1, "Lorem Ipsum", time(), null, $user, loremIpsum()),
			new \News(1, "Lorem Ipsum", time(), null, $user, loremIpsum()),
			new \News(1, "Lorem Ipsum", time(), null, $user, loremIpsum()),
			new \News(1, "Lorem Ipsum", time(), null, $user, loremIpsum()),
		]

		?>
        <!doctype html>
        <html lang="de">
		<?php HTML::head() ?>
        <body>

        <div class="container">
			<?php HTML::header(); ?>
            <main>
                <h1>News</h1>
                <hr class="mt-2 mb-4">
                <div class="row">
					<?php
					foreach ($news as $newsItem) {
						?>
                        <div class="col-md-3 mb-4">
                            <div class="card ">
                                <img src="../assets/images/placeholder_m.jpg" class="card-img-top" alt="Image">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $newsItem->title ?></h5>
                                    <p class="card-text"><?= truncate($newsItem->text, 100) ?></p>
                                    <a href="../news/<?= $newsItem->id ?>/" class="btn btn-primary stretched-link">
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