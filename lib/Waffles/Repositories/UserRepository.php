<?php

namespace Waffles\Repositories;

use Waffles\User;

class UserRepository
{
	protected $user;

	public function __construct()
	{
		$this->user = new User;
	}

	public function find($id)
	{
		return $this->user->find($id);
	}
}