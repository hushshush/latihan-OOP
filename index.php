<?php
//echo "Hello, PHP!"

class MyClass
{
	public $prop1 = "I'm a class property";
  // Class properties and methods go here
	// jika variable sudah ada di kelas lain, ngga masalah nama sama.
}
class YourClass
{
	public $prop1 = "You are a class property";
  // Class properties and methods go here
}
$obj = new MyClass;
$obj2 = new YourClass;

var_dump($obj, $obj2); 

?>