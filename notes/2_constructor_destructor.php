<?php

class UserB {
	public $name;
	public $age;

	public function __construct($name, $age) {
		//__CLASS__ *called magic constant* is a special variable within class that gives you the name of the class
		echo 'Class ' . __CLASS__ . ' instantiated<br>';

		// echo 'constructor ran';
		$this->name = $name;
		$this->age = $age;
	}

	public function sayHello() {
		return $this->name . ' Says Hello';
	}

	public function __destruct() {
		echo 'destructor ran...';
	}
	//runs after all instances of this class object has finished its method invokes
	//destruct() is used for cleanup and closing connections
}

$user1 = new UserB('Brad', 36);
echo $user1->name . ' is ' . $user1->age . ' years old';
echo '<br>';
echo $user1->sayHello();

echo '<br>';

$user2 = new UserB('Sara', 25);
echo $user2->name . ' is ' . $user2->age . ' years old';
echo '<br>';
echo $user2->sayHello();

//__destruct() for both instances of the class runs here at the end

//__construct and destruct are called magic methods which are predefined methods