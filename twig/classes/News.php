<?php

class News {
	public int $id;
	public string $title;
	public int $timestamp;
	public ?string $image = null;
	public User $author;
	public string $text;

	public function __construct($id = null) {
		if (!is_null($id)) {
			$this->getById($id);
		}
	}

	function cast(array $query) {
		$this->id = $query["id"];
		$this->title = $query["title"];
		$this->timestamp = $query["timestamp"];
		$this->image = $query["image"];
		$this->author = new User($query["author"]);
		$this->text = $query["text"];
	}

	function getById($id) {
		$query = SQL::select("SELECT * FROM news WHERE id LIKE ?", "i", $id);
		$this->cast($query);
	}

	static function getAll(?int $limit = null): array {
		if (is_null($limit)) $limit = 999;
		$query = SQL::select_array("SELECT * FROM news ORDER BY timestamp DESC LIMIT ?", "i", $limit);
		return SQL::castQryToObj($query, static::class);
	}

	static function getForUser(int $user): array {
		$query = SQL::select_array("SELECT * FROM news WHERE author = ? ORDER BY timestamp DESC LIMIT 4", "i", $user);
		return SQL::castQryToObj($query, static::class);
	}
}