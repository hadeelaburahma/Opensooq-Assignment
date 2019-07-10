<?php

include_once 'HammingDist.php';
include_once 'LevenshteinDis.php';

class Helper {
    
    private $type = 0;
    
    private $str1 = null;
    
    private $str2 = null;
    
    private $distance = 0;

    /* helper function to apply both classes depending on type value
    where 1 is for hamming and 2 for levenshtein */
    public static function distanceHelper ($type,$str1,$str2): int {
        
        switch ($type) {
            // 1 for hamming
            case 1 :
              $hamming = new hammingDist ();
              $distance = $hamming -> hamming_dis ($str1,$str2);
              break;

            // 2 for levenshtein
            case 2 :
              $levenshtein = new levenshteinDis ();
              $distance = $levenshtein -> levenshtein_dis ($str1,$str2);
              break;

            Default :
              $distance = 0;
              echo 'Please enter 1 for hamming or 2 for levenshtein';
              break;
        }

        return $distance;
    }
}