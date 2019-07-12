<?php
include_once "test.php";

/* Test Cases:
   the function used is test_value ($type,$str1.$str2, $expected_value)
   where type 1 for hamming, type 2 for levenshtein
*/

//Test Hammingn
echo 'Test hamming:'.'</br>';
echo 'Case 1: ' . test::test_value(1,'this is a test','this is test',6). '</br>'
.'Case 2: ' . test::test_value(1,'this is test','the is test',10) . '</br>'
.'Case 3: ' . test::test_value(1,'chase','phase',1).'</br>';

//Test Levenshtein
echo '</br>'.'Test Levenshtein:'.'</br>';
echo 'Case 1: ' . test::test_value(2,'this is test','the is test',2).'</br>'
.'Case 2: ' . test::test_value(2,'this is a test','this is test',2).'</br>'
.'Case 3: ' . test::test_value(2,'chase','phase',1).'</br>';
?>