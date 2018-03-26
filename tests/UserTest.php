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
}