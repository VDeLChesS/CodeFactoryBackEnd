<?php
$name = "Victor";
$surname = "Chesnay";
$age = 26;
$job_title = "Web Developer";
$place_of_birth = "Vienna";

echo "Hi! I will show you how to concatenate strings by using the period operator ! " . "<br>" . "Let's start with the first example" . "<br>" . "I will concatenate my name and my surname" . "<br>" . "I will also concatenate my age and my place of birth" . "<br>" . "I will also concatenate my job title and a sentence" . "<br>" . "I will also show you how to get the type of a variable" . "<br>" . "Let's start" . "<br>" . "<br>";

echo "My name is " . $name . " " . $surname . "<br>" . "I am " . $age . " years old and I was born in " . $place_of_birth . "<br>";


$sentence = "I currently work as a " . $job_title . "and I am learning PHP at the moment" . "<br>";
echo $sentence ."<br>" . "<br>";
echo "the variable value type for the Variable age is : " . gettype($age) . "<br>";
echo "the variable value type for the Variable sentence is : " . gettype($sentence);