<?php

interface A{
	public function method1();
	public function method2();
}

abstract class B implements A{
	abstract function first();
	public function method2(){
		echo " Second method<br>";
		return $this;
	}
}
class c extends B {
	public function first(){
		echo "hello<br>";
		return $this;
	}
	public function method1(){
		echo " First Method<br>";
		return $this;
	}
}
$a = new c();
$a->method1();
?>