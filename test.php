<?php
include_once 'Helper.php';

class test {
    public static function test_value ($type, $str1, $str2, $expected_value) {
        $returned_value = helper::distanceHelper($type,$str1,$str2);
        $result = ($expected_value == $returned_value) ? 'passed':'failed';
        return $result;
    }
}

?>