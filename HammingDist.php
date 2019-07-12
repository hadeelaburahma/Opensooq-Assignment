<?php
  
class HammingDist {
  private $a = null;
  private $b = null;
  private $distance = 0;
    
  /* main function to find hamming distance
    firstly, it will check the lengths of string to pad shorter string
    secondly, it will check the strings char by char
  */

  public function __construct () {
    global $distance;
    $distance = 0;
  }
  public function hamming_dis ($a,$b){

    global $distance;
    if ($a == $b) return 0;

    // check the lengths of the strings and pad shorter with spaces
    if (strlen($a) > strlen($b)) {
      $b = str_pad($b,strlen($a));
    }
      
    else {
      if (strlen($a) < strlen($b)) {
        $a = str_pad($a,strlen($b));
      }
    }

    $char = 0;

    while (isset($a[$char]) != '') { 
      if ($a[$char] != $b[$char]) 
        $distance++; 
      $char++; 
    }
    return $distance;
  }
}