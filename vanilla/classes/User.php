<?php

class User {
	public int $id;
	public bool $employed = true;
	public string $name;
	public ?string $image = null;
	public ?string $department;
	public ?string $phone;
	public ?string $email;

	/**
	 * @param int $id
	 * @param bool $employed
	 * @param string $name
	 * @param string|null $image
	 * @param string|null $department
	 * @param string|null $phone
	 * @param string|null $email
	 */
	public function __construct(int $id, bool $employed, string $name, ?string $image, ?string $department, ?string $phone, ?string $email) {
		$this->id = $id;
		$this->employed = $employed;
		$this->name = $name;
		$this->image = $image;
		$this->department = $department;
		$this->phone = $phone;
		$this->email = $email;
	}
}