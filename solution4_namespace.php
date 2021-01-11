<!-- With the help of namespace we include number of same name class 
Namespace allow for better organization by grouping classes that work together to perform a task-->
<?php
 require 'file1.php';
 require 'file2.php';

 $ob1 = new first\one(); // by defining like this we use the same name class 
 $ob1 = new second\one();
?>