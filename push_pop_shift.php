<?php


$myName = array('Al' , 'Mamud', 'Bijoy');

echo "<pre>";
print_r($myName);




//pushing array value in first
array_unshift($myName, "Maruf Abdullah");
echo "<pre>";
print_r($myName);

//pushing array value in last
array_push($myName, "Maruf Abdullah");
echo "<pre>";
print_r($myName);

//removing value form the last;
array_pop($myName);
echo "<pre>";
print_r($myName);