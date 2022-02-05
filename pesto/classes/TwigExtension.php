<?php

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension {

	public function getFilters() {
		return [
			new TwigFilter('image', [$this, 'resolveImage']),
		];
	}

	public function getFunctions() {
		return [
			new TwigFunction('truncate', [$this, 'truncate'])
		];
	}

	//Truncates a string and adds ... to the end
	function truncate(string $string, int $length): string {
		return substr($string, 0, $length) . "...";
	}

	//Adds the server path to an image and if the image is null, returns an placeholder image
	function resolveImage(?string $image): string {
		if (empty($image)) $image = "placeholder.jpg";
		return RESOURCESROOT . "/.assets/images/" . $image;
	}
}
