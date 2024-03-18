<?php

function lapCounter() {
   static $lap =  1;
    echo $lap.'<br>';
   $lap++;
}
 
lapCounter();
lapCounter();
lapCounter();
//output:
//1
//2
//3