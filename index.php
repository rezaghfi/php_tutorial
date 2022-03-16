<?php

require_once __DIR__.'/1_basics/Main.php';
require_once __DIR__.'/3_oop/Person.php';


$person = new Person('reza', 25);
echo "<br> person name is: ". $person->getName();