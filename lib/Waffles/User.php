<?php

namespace Waffles;

class User
{
	public $data;

	public function __construct()
	{

	}

	public function find($id)
	{
		$this->data = compact('id');

		return $this;
	}
}