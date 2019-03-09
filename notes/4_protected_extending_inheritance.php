<?php

	class User {
		protected $name = 'Brad';
		protected $age;

		public function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;
		}
	}

	//Customer class has access to properties and methods from the User class
	class Customer extends User {
		private $balance;

		public function __construct($name, $age, $balance){
			parent::__construct($name, $age);
			$this->balance = $balance;
		}

		public function pay($amount) {
			return $this->name . ' paid $' . $amount;
			//$this-> name is from the protected $name property from the User Class
		}

		public function getBalance() {
			return $this->balance;
		}

	}

	$customer1 = new Customer('John', 33, 500);

	echo $customer1->pay(100);
	echo '<br>';
	echo $customer1->getBalance();
?>