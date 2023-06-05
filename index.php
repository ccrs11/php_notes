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

$i = 1;
while ($i <= 10) :
    echo $i;
    $i++;
endwhile;

echo '<h4>foreach</h4>';
/**
 * *foreach
 */
foreach ($variable as $key => $value) {
    //* #code...
}
