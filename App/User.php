<?php

namespace App\Entities;

class User{
	private $firstName;
	private $lastName;

	public function __construct(){
		//TODO[ucv]: Do someathing lated ...
	}

	public function getFirstName(){
		return $this->firstName;
	}
	public function setFirstName($firstName){
		$this->firstName = $firstName;
	}

	public function getLastName(){
		return $this->lastName;
	}

	public function setLastName($lastName){
		$this->lastName = $lastName;
	}

	public function getFullName(){
		return $this->getFirstname() . " " . $this->getLastName();
	}

}