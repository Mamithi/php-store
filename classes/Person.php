<?php
	class Person {
		public $firstname;
		public $lastname;

		public function __construct(){
			echo 'Inside person contructor <br/>';

			$this->firstname = '';
			$this->lastname = '';
		}

		public function hello($str){
			return "A person says $str";
		}
	}
