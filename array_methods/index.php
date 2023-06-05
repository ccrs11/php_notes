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

/**
 * * array_reduce(array $array, callable $callback, mixed $initial = null): mixed
 * * iterative reduce an array to a value
 * * works similar to reduce in js but here instead of four parameters has 3, the array, function and initial parameter
 * *internally has a carry and and item, the carry its used to storage the calculations and the item is the continue value
 */
$as = array(1, 2, 3, 4, 5);
//* I put one as start value becouse if the start value is 0 the final value will be 0 (0*any number = 0).
$asr=array_reduce($as,fn($carry,$item)=>$carry *= $item,1);
print_r($asr);
echo '<br>';

/**
 * * array_key_exists(string|int $key, array $array): bool
 * * returns true if the given key is set in the array. if the key exists but the value its null also returns true
 */
$search_array = array('first' => null, 'second' => 4);
//* returns false
isset($search_array['first']);
//* returns true
array_key_exists('first', $search_array);
echo '<br>';

/**
 * * in_array(mixed $needle, array $haystack, bool $strict = false): bool
 * * verify if a value ($needle) exists in an array ($haystack). a last option $strict it's to compare in strict manner when its true
 * * if needle is a string, the comparison is done in a case-sensitive manner. 
 */
$anee = array('1.10', 12.4, 1.13);
if (in_array('12.4', $anee, true)) {
    echo "'12.4' found with strict check\n";
}
if (in_array(1.13, $anee, true)) {
    echo "1.13 found with strict check\n";
}
echo '<br>';

/**
 * * array_rand(array $array, int $num = 1): int|string|array
 * * select one or more random entries out of an array 
 * * When picking only one entry, array_rand() returns the key for a random entry. Otherwise, an array of keys for the random entries is returned. 
 */
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]]. "  ";
echo $input[$rand_keys[1]];
echo '<br>';

/**
 * * array_unique(array $array, int $flags = SORT_STRING): array
 * * delete all duplicate values
 * * this method has some flags that are used to modify the comparison behavior 
 * *SORT_REGULAR-normally ||SORT_NUMERIC-numerically ||SORT_STRING-strings ||SORT_LOCALE_STRING-based on the current locale.
 * * No strict takes the first one
 */
$input = array(4, "4", "3", 4, 3, "3");
$result = array_unique($input);
var_dump($result);
echo '<br>';

/**
 * *  array_intersect(array $array, array ...$arrays): array
 * * Returns an array containing all of the values in array whose values exist in all of the parameters. 
 */
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);
echo '<br>';

/**
 * *  array_diff(array $array, array ...$arrays): array
 * *  Returns an array containing all the entries from array that are not present in any of the other arrays.
 */
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
print_r($result);
echo '<br>';

/**
 * *  array_push(array &$array, mixed ...$values): int
 * *  Returns the new number of elements in the array. 
 */
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo '<br>';

/**
 * *  array_pop(array &$array): mixed
 * * Returns the value of the last element of array. If array is empty, null will be returned. 
*/
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
echo '<br>';

/**
 * * array_reverse(array $array, bool $preserve_keys = false): array
 * * Returns the reversed array. 
 */
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);
print_r($input);;
echo '<br>';
print_r($reversed);
echo '<br>';
print_r($preserved);
echo '<br>';





