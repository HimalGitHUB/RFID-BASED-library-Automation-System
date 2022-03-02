
<?php
$date = date("Y/m/d");

$add = date("Y m d", strtotime($date . "+2 week"));
echo $date; 
 
echo $add;
?>
