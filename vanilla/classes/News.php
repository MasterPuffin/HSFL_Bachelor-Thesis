<?php

class News {
	public int $id;
	public string $title;
	public int $timestamp;
	public ?string $image = null;
	public User $author;
	public string $text;

	/**
	 * @param int $id
	 * @param string $title
	 * @param int $timestamp
	 * @param string|null $image
	 * @param User $author
	 * @param string $text
	 */
	public function __construct(int $id, string $title, int $timestamp, ?string $image, User $author, string $text) {
		$this->id = $id;
		$this->title = $title;
		$this->timestamp = $timestamp;
		$this->image = $image;
		$this->author = $author;
		$this->text = $text;
	}
}