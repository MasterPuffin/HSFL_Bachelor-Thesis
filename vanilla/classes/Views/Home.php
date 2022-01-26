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

                <div class="px-4 py-5 my-5 text-center">
                    <img class="d-block mx-auto mb-4" src="<?= WEBROOT ?>/assets/images/HSFL_Icon.png" alt=""
                         height="100">
                    <h1 class="display-5 fw-bold">Willkommen</h1>
                    <div class="col-lg-6 mx-auto">
                        <p class="lead mb-4">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                            consequat massa quis enim.
                        </p>
                    </div>
                </div>

                <div class="px-4 pb-5 my-5 text-center">
                    <h2 class="display-6 fw-bold mb-4">Letzte News</h2>
                    <div class="row">
						<?php
						foreach (\News::getAll(4) as $newsItem) {
							?>
                            <div class="col-md-3 my-4">
                                <div class="card ">
                                    <img src="<?= resolveImage($newsItem->image) ?>" class="card-img-top" alt="Image">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $newsItem->title ?></h5>
                                        <p class="card-text"><?= truncate($newsItem->text, 100) ?></p>
                                        <a href="<?= WEBROOT ?>/news/<?= $newsItem->id ?>/"
                                           class="btn btn-primary stretched-link">
                                            Mehr lesen
                                        </a>
                                    </div>
                                </div>
                            </div>
							<?php
						}
						?>
                    </div>
                </div>

                <div class="px-4 pb-5 my-5 text-center">
                    <h2 class="display-6 fw-bold mb-4">Lorem Ipsum</h2>
                    <div class="col-lg-6 mx-auto">
                        <p class="lead mb-4">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                            consequat massa quis enim.
                        </p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <a href="<?= WEBROOT ?>/contact/" class="btn btn-primary btn-lg px-4 gap-3">Kontakt</a>
                        </div>
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