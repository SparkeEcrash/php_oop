<?php

// Define a class
class UserA {
	
	// Properties (attributes)
	public $name = 'Brad'; 

	//Methods (functions)
	public function sayHello(){
		return $this->name . ' Says Hello';
	}

}

// Instatiate a user object from the user class
$user1 = new UserA();

$user1->name = 'Brad';
echo $user1->name;
echo '<br>';
echo $user1->sayHello();
echo '<br>';

$user2 = new UserA();
$user2->name = "Jeff";
echo $user2->name;
echo '<br>';
echo $user2->sayHello();

?>