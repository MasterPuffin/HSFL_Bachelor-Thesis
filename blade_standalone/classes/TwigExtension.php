<?php
// src/TwigExtension/customFilters.php

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension {

	public function getFunctions(): array {
		return array(
			new TwigFunction('truncate', array($this, 'truncate')),
		);
	}

	public function getFilters(): array {
		return array(
			new TwigFilter('image', array($this, 'resolveImage')),
		);
	}


	public function getName(): string {
		return 'ProjectTwigExtension';
	}

	//Adds the server path to an image and if the image is null, returns an placeholder image
	function resolveImage(?string $image): string {
		if (empty($image)) $image = "placeholder.jpg";
		return RESOURCESROOT . "/.assets/images/" . $image;
	}

	//Truncates a string and adds ... to the end
	function truncate(string $string, int $length): string {
		return substr($string, 0, $length) . "...";
	}
}