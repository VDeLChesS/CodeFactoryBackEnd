<?php
$n = 2;  // define variable with global scope with value = 2

// function Local to test local scope
function local() 
{
    $n =  5 ;  // Define variable with same name,
    // but with local function scope and different value
    echo "The var \$n from the local() function = $n <br>";
   // $a will be interpreted and rendered as 5              
}
local();  // call the function
echo  "The var \$n from outside the function = $n";
// $a will be rendered as 2 from the beginning   

echo "\n"; // new line

echo "\n"; // new line

/*
$name = 'John';
$surname = 'Doe';
function  printName()
{  
   $fullName = $name . ' ' . $surname;
   return $fullName;
}
echo printName();
echo $fullName;