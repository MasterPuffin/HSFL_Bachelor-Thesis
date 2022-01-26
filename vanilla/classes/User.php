<?php

class User {
	public int $id;
	public bool $employed = true;
	public string $name;
	public ?string $image = null;
	public ?string $department;
	public ?string $phone;
	public ?string $email;

	public function __construct($id = null) {
		if (!is_null($id)) {
			$this->getById($id);
		}
	}

	function cast(array $query) {
		$this->id = $query["id"];
		$this->employed = $query["employed"];
		$this->name = $query["name"];
		$this->image = $query["image"];
		$this->department = $query["department"];
		$this->phone = $query["phone"];
		$this->email = $query["email"];
	}

	function getById($id) {
		$query = SQL::select("SELECT * FROM users WHERE id LIKE ?", "i", $id);
		$this->cast($query);
	}

	static function getAll(): array {
		$query = SQL::select_array("SELECT * FROM users ORDER BY department ASC", "");
		return SQL::castQryToObj($query, static::class);
	}

	static function orderByDepartments(array $users): array {
		$departments = [];
		foreach ($users as $user) {
			if (!array_key_exists($user->department, $departments)) {
				$departments[$user->department] = new Department($user->department, []);
			}
			$departments[$user->department]->users[] = $user;
		}
		return $departments;
	}
}