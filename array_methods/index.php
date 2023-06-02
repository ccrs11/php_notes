<?php
/**
 *  My Method
 * * Important information
 * ! deprecatedMethod
 * ? should this method be public
 */

/**
 * *interchange the key and value information 
 */
$array1 = array("a"=>"apple", "b"=>"banana");
$flipResult = array_flip($array1);
print_r($flipResult);
//* Array ( [apple] => a [banana] => b )
