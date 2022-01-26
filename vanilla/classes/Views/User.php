<?php

namespace Views;

use HTML;

class User {
	static function page(int $id) {
		$user = new \User($id);
		?>
		<!doctype html>
		<html lang="de">
		<?php HTML::head() ?>
		<body>

		<div class="container">
			<?php HTML::header(); ?>
			<main>
				<h1><?= $user->title ?></h1>
				<hr class="mt-2 mb-4">
				<img class="img-fluid rounded mx-auto d-block mb-4" alt="image" src="<?= resolveImage($user->image) ?>">
				<p><?= $user->text ?></p>
				<hr class="">
				<div class="row position-relative">
					<a href="<?= WEBROOT ?>/user/<?= $user->author->id ?>/" class="stretched-link"></a>
					<div class="col-1">
						<img class="img-user rounded-circle" alt="image"
						     src="<?= resolveImage($user->author->image) ?>">
					</div>
					<div class="col-11">
						<h4 class=" mt-2"><?= $user->author->name ?></h4>
						<p class="mb-0"><?= $user->author->department ?></p>
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