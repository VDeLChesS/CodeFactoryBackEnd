<?php
$name = 'John';
$surname = 'Doe';
function  printName()
{
   global $name, $surname, $fullName;
   $fullName = $name . ' ' . $surname;
    return $fullName;
}
echo printName()."<br>";
echo  $fullName;
