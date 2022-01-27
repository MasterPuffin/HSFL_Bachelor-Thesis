<?php

class Department {
	public string $name;
	public array $users = [];

	/**
	 * @param string $name
	 * @param array $users
	 */
	public function __construct(string $name, array $users) {
		$this->name = $name;
		$this->users = $users;
	}

}