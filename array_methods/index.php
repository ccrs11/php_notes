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
echo "\n";
//* Array ( [apple] => a [banana] => b )

/**
 * *  array_fill(int $start_index, int $count, mixed $value): array
 * *  fill an array from the $start_index with $value, $count times. 
 * * it is useful also to create an array
 * * it is can use range(0,X);
 */
$fill = array_fill(-2, 4, 'pear');
print_r($fill);
echo "\n";

/**
 * * array_filter(array $array, ?callable $callback = null, int $mode = 0): array
 * * this method use a funtion $callback to filter an $array
 */
$array2 = [6, 7, 8, 9, 10, 11, 12];
echo "Odd :\n";
print_r(array_filter($array2, fn($var) => $var & 1));



