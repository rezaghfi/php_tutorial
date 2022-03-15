<?php

require_once __DIR__.'/oop/Person.php';
$person = new Person('reza', 25);

echo "person name is: ". $person->getName();