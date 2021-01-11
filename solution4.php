<!-- Trait in PHP -->
<!-- Tarits are baically use in php for solving the problem of multiple inheritance because multiple inheritance not allowed in PHP. Traits are defined much in the same way as classes. 
	As previous example we use the traits for multiple inheritance.-->

<?php
trait Hello
{
    function sayHello() {
        echo "Hello";
    }
}

trait World
{
    function sayWorld() {
        echo "World";
    }
}

class HelloWorld
{
    use Hello, World;
}

$world = new HelloWorld();
echo $world->sayHello() . " " . $world->sayWorld();

?>