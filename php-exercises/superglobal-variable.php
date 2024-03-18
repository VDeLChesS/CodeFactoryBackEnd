<?php
$name = 'John';
$surName = 'Doe';
$fullName;


function printName()
{  
   $GLOBALS['fullName'] = $GLOBALS['name' ].' '.$GLOBALS['surName'];
   return $GLOBALS[ 'fullName'];
}
echo printName();
echo $fullName;


var_dump( $GLOBALS );
