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
echo '<br>';
//* Array ( [apple] => a [banana] => b )

/**
 * *  array_fill(int $start_index, int $count, mixed $value): array
 * *  fill an array from the $start_index with $value, $count times. 
 * * it is useful also to create an array
 * * it is can use range(0,X);
 */
$fill = array_fill(-2, 4, 'pear');
print_r($fill);
echo '<br>';

/**
 * * array_filter(array $array, ?callable $callback = null, int $mode = 0): array
 * * this method use a funtion $callback to filter an $array
 */
$array2 = [6, 7, 8, 9, 10, 11, 12];
echo "Odd :\n";
print_r(array_filter($array2, fn($var) => $var & 1));
echo '<br>';

/**
 * * array_map(?callable $callback, array $array, array ...$arrays): array
 * * returns an array containing the results of aplying the $callback to the $array or $arrays
 */
//* one line; the array is determinated by the funtion range [1,2,3,4,5] and the lambda funtion fn($value): int => $value * 2 it's used as callback.
print_r(array_map(fn($value): int => $value * 2, range(1, 5)));
echo '<br>';

//* null as a callback to generate an array of arrays
$a = [1, 2, 3, 4, 5];
$b = ['one', 'two', 'three', 'four', 'five'];
$c = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];
$d = array_map(null, $a, $b, $c);
print_r($d);
echo '<br>';





