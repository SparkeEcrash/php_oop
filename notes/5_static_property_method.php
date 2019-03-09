<?php
	class User {
		public $name;
		public $age;
		public static $minPassLength = 6;
		//this can stay as 6 no matter what the instance of the User Class (or the person who owns the User instance) is

		public static function validatePass($pass){
			//static properties and methods are accessed with self *representing 'this'*
			if(strlen($pass) >= self::$minPassLength){
				return true;
			} else {
				return false;
			}
		}
	}

	$password = 'hello1';
	if(User::validatePass($password)){
		echo 'Password valid';
	} else {
		echo 'Password NOT valid';
	}