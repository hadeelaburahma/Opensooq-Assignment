<?php
include_once 'Helper.php';

/* To run code using linux terminal by: 
   1. php should be installed.
   2. run the following command
      php test_cmd.php   
*/

echo "Please enter 2 strings to calculate Levenshtein distnace between them: \n";
echo 'First String: ';

//stop execution until the user input a value
$handle = fopen ("php://stdin","r");
$str1 = fgets($handle);
echo 'Second String: ';
$handle = fopen ("php://stdin","r");
$str2 = fgets($handle);

echo helper::distanceHelper(2,$str1,$str2);
?>