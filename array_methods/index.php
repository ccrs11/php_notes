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

/**
 * *  array_fill(int $start_index, int $count, mixed $value): array
 * *  fill an array from the $start_index with $value, $count times. 
 * * it is useful also to create an array
 * * it is can use range(0,X);
 */
$fill = array_fill(-2, 4, 'pear');
print_r($fill);




