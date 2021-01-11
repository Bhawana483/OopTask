<!-- //////////////////////////////////////// Method Chaining in PHP OOP ////////////////////////////////////// -->
<!-- 
With the help of php method chaining we can call more than one method or function of the class in single instruction.

$object->method_1()->method_2()

 -->

<?php


class abc 
{
	
	public function first()
	{
		echo "fisrt<br>";
		return $this;
	}
	public function second()
	{
		echo "second<br>";
		return $this;
	}
	public function third()
	{
		echo "third<br>";
	}
}

$test = new abc();

// $test->first();
// $test->second();
// $test->third();
// If we use like this then the fatal eroor will ocuur "Fatal error: Uncaught Error: Call to a member function second() on null in C:\xampp\htdocs\task_oops\solution1.php:27 Stack trace: #0 {main} thrown in C:\xampp\htdocs\task_oops\solution1.php on line 27" because we call a member function without initilising a object of that method.
// Mostly used in framework based on MVC.
$test->first()->second()->third();// this is method chaining
?>