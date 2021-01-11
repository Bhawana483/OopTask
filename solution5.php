<!-- Dependency Injection is a software design pattern that implements inversion of control for software libraries. 

It is a procedure where one object supplies the dependencies of another object.-->
<?php

   class first {
      private $name;
      public function __construct($name){
         $this->name = $name;
      }
      public function firstname(){
         return count($this->name);
      }
   }
   $a = array("hello", "world");
   $b = new first($a);
   echo $b->firstname();
?>

