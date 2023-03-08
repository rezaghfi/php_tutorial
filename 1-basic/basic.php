<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?>

</body>
</html>

intro
install
syntax
comment
variables
echo / print
data types
strings
numbers
math
constants
operators
if else elseif
switch
loops
functions
arrays
superglobals
regex
<?php
// PHP code goes here
?>

<?php
# php case sensitivity
ECHO "heloo";
echo "Hello World!";
$color = "red";
echo "My car is " . $color . "<br>";
//echo "My house is " . $COLOR . "<br>";
#echo "My boat is " . $coLOR . "<br>";

// this is comment
# this is comment

/*
* this is multiple line comments
 * this multiple line comments
*/

$x = 1; // this variable
$x = 5 + /*this comment*/ 5;
// creating (declaring) variables
$txt = "Hello world!";
$x = 5;
$y = 10.5;
?>
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)

// output with echo and print
<?php
echo $txt;
echo($txt);
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
print($txt . "this is basic of php\n");
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
$x = 4;
$y  = 5;
echo $x + $y;
?>
// variable scope is : 1-local 2-global 3-static
<?php
$a = 5;
$x = 10;
$y = 20;
function test(){
  // a is local
  $a = 1;
  echo "\nvariable a inside function is: $a\n";
  // The global keyword is used to access a global variable from within a function.
  global $x, $y;
  echo "to access global x and y use global keyword and x + y: ". $x + $y;
  //  $GLOBALS[index]
  echo "\nwith super golobal GLOBALS can x + y: ". $GLOBALS['y'] + $GLOBALS['x']."\n";
  // static variable dont delelte with completing function
  static $staticVar = 0;
  echo "\nstatic varible is: $staticVar\n";
  $staticVar++;
}
test();
echo "\nvariable outside function is: $a\n";
// static varible is change each time
test();
test();
test();

?>

<?php
// data types: string integer float boolean array object null resource
$x = "text";
var_dump($x);
$x = 1;
var_dump($x);
$x = 12.344;
var_dump($x);
$x = true;
var_dump($x);
$x = array("Volvo", "BMW", "Toyota");
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
var_dump($x);
//A class is a template for objects, and an object is an instance of a class.
class Car{
    public $color;
}

$x = new Car();
var_dump($x);
// A variable of data type NULL is a variable that has no value assigned to it.
$x = null;
var_dump($x);
//The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
echo strlen("hello world");
echo str_word_count("heloo woorld");
echo strrev("hello world");
echo strpos("hello world","world");
echo str_replace("world", "dolly", "Hello world");
$x = 345;
var_dump(is_int($x));
$x = 1.3e21;
var_dump($x);
$x = acos(7);
//NaN is used for impossible mathematical operations.
var_dump($x);
$x = "59.85" + 100;
echo $x;
var_dump(is_numeric($x));

// casting float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "\n";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

// math
echo "\n";
echo(pi());
echo "\n";
echo(max(1,34));
echo "\n";
echo(sqrt(64));
echo "\n";
echo(round(0.778));
echo "\n";
echo(rand());
echo "\n";
//constant
define("GREETING", "Welcome to learn php!");
echo GREETING;


define("BEST", ["Alfa Romeo", "BMW", "Toyota"]);
echo BEST[0];

const cars = [
  "Alfa Romeo",
  "BMW",
  "Toyota"
];
echo cars[0];

//opeators
// عملگرهای ریاضیاتی
// + - * / % ** ++ --
//عملگرهای مقایسه ای
// == === != <> !== < > <= >= <=>
//عملگرهای منطقی
// and or xor && || !
// عملگر برای رشته
//. .=
//عملگرهای آرایه
// + == === != <> !==

$t = date("H");
if($t<"20"){
    echo "have a good day";
}

if($t < "10"){
    echo "have good morning";
}elseif($t < "20"){
    echo "have good day";
}else{
    echo "have a good night";
}

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
//while - loops through a block of code as long as the specified condition is true
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
//do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

//for - loops through a block of code a specified number of times
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
//foreach - loops through a block of code for each element in an array
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
  echo "$value <br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

//break
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) break;
  echo "The number is: $x <br>";
}

//continue
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) continue;
  echo "The number is: $x <br>";
}

// function 1-built-in 2-user defined
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

function addNumbers(int $a, int $b) {
  return $a + $b;
}
// echo addNumbers(5, "5 days"); error
echo addNumbers(10,23);
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10