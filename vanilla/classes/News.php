<?php

class News {
	public int $id;
	public string $title;
	public int $timestamp;
	public ?string $image = null;
	public User $author;
	public string $text;
}