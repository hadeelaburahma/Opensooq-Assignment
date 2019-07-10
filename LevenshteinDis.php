<?php

class LevenshteinDis {
  private $a = null;
  private $b = null;
  private $distance = 0;

  // Function that calculate Levenshtein distance
  public function levenshtein_dis ($a,$b) {
    $distance = levenshtein($a,$b);
    return $distance;
  } 
}