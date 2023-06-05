<?php
/**
 * comments with //
 */
/**
 * type of screen prints
 * output functions
 * 1 echo 2 print() 3 sprintf()
 */
echo '<h1> Hola mundo </h1>';
$text ='mundo';
printf("Hola %s", $texto);
var_dump($text);
//%s continue with a string value
/**
  * Variables and constants
*/

//declare a variable
$edad=25;
//declare a constant
define ("PI", 3.1416);
//declare a string constant
define ("SALUDO", "Hola Mundo!");

/**
*Type of data
*/
//boolean
$logueado =true;
var_dump($logueado);
//enteros
$numero=200;
var_dump($numero);
//floats
$float =200.5;
var_dump($float);
//strings
$nombre="juan";
// array
$array = [];
var_dump($array);
/**
*Operators and nambers
**/
$numero1=20;
$numero2=30;
$numero3=30;
$numero4="30";

var_dump($numero1>$numero2);
echo "<br/>";

var_dump($numero1< $numero2);
echo "<br/>";

var_dump($numero2==$numero4);
echo "<br/>";

var_dump($numero2===$numero4);
echo "<br/>";
//strict comparison

//-1 if left is less than
//0 if are iqual
//1 si left is greater
var_dump($numero1 <=> $numero2);
echo "<br/>";
var_dump($numero2<=>$numero3);
echo "<br/>";
var_dump($numero2<=>$numero1);
echo "<br/>";
/**
*string handling
**/
 $nombreCliente="Campers Campuslands";

//how long is a String
echo strlen($nombreCliente);
var_dump($nombreCliente);
//delete blank spaces
$texto=trim($nombreCliente);
echo strlen($texto);
//convert to uppercase
echo strtoupper($nombreCliente);
//convert to lowercase
echo strtolower($nombreCliente);

$mail1= "correo@correo.com";
$mail2= "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Juan','J',$nombreCliente);

//check the existence of a string
echo strpos($nombreCliente, 'Pedro');
$tipoCliente="premium - Empresarial";

echo "<br>";

echo "El Cliente " . $nombreCliente . "es" . $tipoCliente;

//echo "El Cliente {$nombreCliente} es ${tipoCliente}";

