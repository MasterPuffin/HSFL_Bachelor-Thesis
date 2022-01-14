<?php

class User {
	public int $id;
	public bool $employed = true;
	public string $name;
	public ?string $image = null;
	public ?string $department;
	public ?string $phone;
	public ?string $email;
}