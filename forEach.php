<?php 

$students = array ('vinod', 'bahadur', 'thapa', 'technical');

echo "<ol>";
foreach ($students as  $names) {
 echo "<li>" .$names . "</li>";

}

echo "</ol>";


$schoolName = array('wisdom', 'lighthouse', 'sristy', 'zilla');

echo "<ol>";
foreach ($schoolName as $key => $name) {
 echo  "<li>" . $name . "</li>";
};
echo "</ol>";
