<!-- Multiple inheritance with PHP -->
<!-- Multiple inheritance not allowed in php but we can catch this with the use of TRAIT.
	The main reason because multiple inheritance isn’t allowed in PHP is due to the collisions. -->
<?php
trait Base1
{
    public function hello($name)
    {
        return "Hello {$name}";
    }
}
 
trait Base2
{
    public function hello($name)
    {
        return "Hey {$name}";
    }
}
 
class abc
{
    use Base1, Base2 {
        Base1::hello insteadof Base2;
    }
}
 
$class = new abc();
echo $class->hello("World");

?>