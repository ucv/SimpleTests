<?php 

use PHPUnit\Framework\TestCase;
use App\Entities\User;

class UserTest extends TestCase
{
	public function testTrueIsTrue(){
		$this->assertTrue(true);
	}

	public function testGetFirstName(){
		$user = new User();
		$user->setFirstName('Bobitza');

		$this->assertEquals($user->getFirstName(),"Bobitza");
	}

	public function testGetLastName(){
		$user = new User();
		$user->setLastName("Mararu");

		$this->assertEquals($user->getLastName(),"Mararu");
	}

	public function testGetFullName(){
		$user = new User();
		$user->setFirstName("Bobitza");
		$user->setLastName("Mararu");

		$this->assertEquals($user->getFullName(), "Bobitza Mararu");
	}
}