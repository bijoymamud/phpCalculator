<?php


$students = array('Maruf', 'Abdullah', 'Al-Mamud', 'Bijoy');

sort($students);
rsort($students);
asort($students);
ksort($students);

echo "<ol>";
foreach ($students as $key => $names) {
  echo "<li>". $names." </li>";
}

echo "</ol>";
?>