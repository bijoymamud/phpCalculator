<?php

//normailly jkonno digit aste pare.
$randomNumber = rand();
// echo $randomNumber ."<br>";

// $randomNumber = rand(min, max);
// aita diye 2 ta given number er vitore random number ber kora hoy

$randomNumber = rand(0, 100);
// echo 'Number is '.$randomNumber;


$number = rand(1,2);
echo $number ."<br>";
if ($number ==1) {
  echo "Heads, I win <br>";
}else{
  echo "tails, you win <br>";
};


$data = "hello how are you? Checkout my new php codes";
echo 'total word of the string is : '. str_word_count($data)."<br>";
echo "Length of the data is : ".  strlen($data);