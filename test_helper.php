<?php
include "Helper.php";

// test the code using helper class
echo 'Hamming: ' . helper::distanceHelper(1,'this is test','the is test').'</br>'
.'Leventshtein: '. helper::distanceHelper(2,'this is test','the is test');
?>