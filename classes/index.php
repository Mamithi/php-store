<?php
	require 'Person.php';

	$person = new Person();
	$person->firstname = 'John';
	$person->lastname = 'Doe';
	echo $person->firstname . ' ' .$person->hello('World');

