<?php 

$colors = array('red', 'blue', 'yellow', 'green');
echo "<pre>";
print_r($colors);

$res = implode(", ", $colors);
echo "My Favourite colors are: ".$res.".";



//explode

$biodata = "My name is Al Mamud Bijoy";
$res = explode(" ", $biodata);
print_r($res);

foreach ($res as $key => $value) {
  echo " ". $value;
}
