<?php
$course = "BackEnd Web Development";
echo "I am \r a PHP file with only \n PHP script";
//no PHP closing tag used
echo "This chapter belongs to the $course section!";
$color = "red";
echo "The color of the sky is $color";
//..Undefined variable: Course in printName_function.php on line 7

function printName($name) {
    $surname= "Doe";
    print "My name is $name $surname";
}
PrintName("John");
//..My name is John Doe