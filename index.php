<?php
/**
 ** 1.8 isset and empthy
 ** isset the variable is defined and it's value is null
 ** empthy the variable is void
 */

echo '<h2>Isset and empty</h2>';

$lista = [];
var_dump(isset($lista));
echo '<br>';
//**true */
var_dump(empty($lista));
echo '<br>';
//**true */

var_dump(isset($name));
echo '<br>';
//**false */
var_dump(empty($name));
echo '<br>';
//**true */ this is true because varable name is empty doen't matter if this variable are not declared

echo '-----------------------';
echo '<h2>Control structures</h2>';

echo '<h3>conditional structures</h3>';
echo '<h4>if - else</h4>';
if (10 > 3) {
    echo true;
} else if (11) {
    echo "maybe";
} else {
    echo 'imposible';
}

echo '<h4>switch</h4>';
/**
 **switch (expresion) {
 **  case valor1:
 **  // bloque de código si la expresión es igual a valor1
 **  break;
 **  case valor2:
 **  // bloque de código si la expresión es igual a valor2
 **  break;
 **  default:
 **  // bloque de código si la expresión no coincide con ninguno de los valores anteriores
 **  break;
 **  }
 */

echo "<br>";

echo '<h3>repetitive structures</h3>';

echo '<h4>while</h4>';
//* The meaning of a while statement is simple. It tells PHP to execute the nested statement(s) repeatedly, as long as the while expression evaluates to true. 
$i = 1;
while ($i <= 10) {
    echo $i++;
}

/**
 * * do-while
 */
//* do-while loops are very similar to while loops, except the truth expression is checked at the end of each iteration instead of in the beginning.
echo '<h4>do while</h4>';
do {
    if ($i < 5) {
        echo "i is not big enough";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
    echo "i is ok";

    /* process i */
} while (0);
echo "<br>";
$i = 1;
while ($i <= 10) :
    echo $i;
    $i++;
endwhile;

/**
 * * bucle for 
 * *  The first expression (expr1) is evaluated (executed) once unconditionally at the beginning of the loop.
** In the beginning of each iteration, expr2 is evaluated. If it evaluates to true, the loop continues and the nested statement(s) are executed. If it evaluates to false, the execution of the loop ends. 
 */
echo '<h4>for</h4>';
/* example 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
/* example 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
/* example 3 */
$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}
/* example 4 */
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);




echo '<h4>foreach</h4>';
/**
 * *foreach
 * * The first form traverses the iterable given by iterable_expression. On each iteration, the value of the current element is assigned to $value. 
 */
foreach ($variable as $key => $value) {
    //* #code...
}

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)

// without an unset($value), $value is still a reference to the last item: $arr[3]

foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$key} => {$value} ";
    print_r($arr);
}


/**
 * *Lesson 20230606
 */

//* user defined functions
//* starts with the function definition (modular, reuse, specific use)
//* useful to organize and simplify the program code

//*function Identificador ([p1],[p2]...){
//*Expresiones.....
//*}

//* function void -> do not returns a value

//* declare(strict_types=1);
//* this declare is used to force the data type definition
function sumar(int $num1, int $num2):void{
    echo $res=$num1+$num2;
}

//* function that returns a value
function sumarr(int $num1, int $num2):int{
    $res=$num1+$num2;
    return $res;
}
//* its important the arguments order!

//* other example
function usuarioAutenticado(bool $autenticado):?string{
//* The ? before string indicates that the return value can be nullable, 
    if($autenticado){
        return "El usuario está autenticado";
    }else
        return null;
}

?>