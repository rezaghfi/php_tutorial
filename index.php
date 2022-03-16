<?php

require_once __DIR__.'/1_basics/Main.php';
require_once __DIR__.'/3_oop/Person.php';

//variable();
//phpinfo();
//exit();

$person = new Person('reza');
echo "<br> person name is: ". $person->getName(); 