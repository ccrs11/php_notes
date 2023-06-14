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


/**
 * *Lesson 20230613
 */

/**
 * *1.13 include, require, include_once, require_once
 */

//* The include function is used to include a PHP file in the program. It allows including the same file multiple times. For example:

include "file.php";

//*The include_once function is similar to include but ensures that the file is included only once in the program, even if it is called multiple times. For example:

include_once "file.php";

//*The require function is also used to include a PHP file in the program, but if the file is not found, it stops the program's execution. For example:

require "file.php";

//*The require_once function is similar to require but ensures that the file is included only once in the program. If the file is not found, it stops the execution. For example:

require_once "file.php";

//*These functions are helpful for including external code files in a PHP program, which allows for code reuse and separation of program logic into different files.
//*There are some differences between including remote and local files. Remote files are pre-interpreted by the source server and then served to the destination server. On the other hand, local files are interpreted by the file that includes them.

/**
 * *1.13 include, require, include_once, require_once
*/

//*json_decode():
//*The json_decode() function is used to decode a JSON string and convert it into a PHP data structure. It takes the JSON string as input and returns the corresponding PHP data.

    json_decode($jsonString, $assoc = false, $depth = 512, $options = 0);
    //* $jsonString (required): The JSON string to be decoded into PHP data.
    //* $assoc (optional): If set to true, the function returns an associative array instead of an object.
    //* $depth (optional): The maximum depth of the JSON data structure to be decoded.
    //* $options (optional): Additional options for the decoding process.

// json_encode() example
$data = array(
  'name' => 'Hii you',
  'age' => 30,
  'email' => 'Hiidyouexample.com'
);

$jsonString = json_encode($data);
echo $jsonString; // Output: {"name":"Hii you","age":30,"email":"Hiidyouexample.com"}

// json_decode() example
$jsonString = '{"name":"Hii you","age":30,"email":"Hiidyouexample.com"}';

$data = json_decode($jsonString);

echo $data->name;  // Output: Hii you
echo $data->age;   // Output: 30
echo $data->email; // Output: Hiidyouexample.com

/**
 * **Métodos mas usados de php**
**text
**array_flip(): Intercambia las claves con sus valores correspondientes en un array.
**array_fill(): Rellena un array con un valor especificado.
**array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
**array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
**array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
**array_key_exists(): Comprueba si una clave existe en un array.
**in_array(): Comprueba si un valor existe en un array.
**array_rand(): Devuelve una o varias claves aleatorias de un array.
**array_unique(): Elimina los valores duplicados de un array.
**array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
**array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
**array_push(): Agrega uno o más elementos al final de un array.
**array_pop(): Extrae y elimina el último elemento de un array.
**array_reverse(): Revierte el orden de los elementos en un array.
**array_sum(): Devuelve la suma de todos los valores de un array numérico.
**array_product(): Devuelve el producto de todos los valores de un array numérico.
**array_chunk(): Divide un array en fragmentos más pequeños.
**array_keys(): Devuelve todas las claves de un array.
**array_values(): Devuelve todos los valores de un array.
**array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.
 */

 /**
  * * 2) PHP Intermedio
*/

/**
 * * 2.1) PHP ORIENTADO A OBJETOS
 */

/**
**Object: An object is like a special thing that can do different actions and has its own special features.
**Class: A class is like a group or category that helps us make objects. It tells us what actions an object can do and what it looks like.
**Attributes: These are the special features or qualities of an object, like its color or size.
**Methods: Methods are the things an object can do, like jump or sing a song.
**Encapsulation: It means putting together things that are related and keeping them organized. It's like putting games of the same type in a box.
**Inheritance: Inheritance is like passing down special powers or abilities from parents to their children. It helps us make new objects based on existing ones.
**Polymorphism: It's a fancy word that means something can change or look different in different situations. It's like a toy car that can transform into a robot.
**Object-oriented programming helps us make computer programs by thinking about things and their actions, just like how we play with games and make them do different things.
 */

/**
 * * 2.1) MODIFICADORES DE ACCESO (ACCESS MODIFICATORS)
 */

//*Access modifiers are special words that help us decide who can see and use different parts of a special group or team.
//*In computer programming, we have different groups called "classes." Each class has its own members like special games or tools, such as attributes and methods.
//*There are three types of access modifiers in PHP that control who can see and use these members in a class:
//*    Public: When something is public, it means everyone can see and use it. It's like sharing games with all our friends, even if they are not in our group.
//*    Private: When something is private, it means only the members of our class can use it. It's like having a secret toy that only our special group knows about. Other groups cannot see or use it.
//*    Protected: When something is protected, it means our special group and the groups we are part of can use it. It's like sharing games with our close friends who are also in our group. Other groups cannot use it directly.
//*So, access modifiers help us decide who can play with which games and use which tools in our class.

/**
 * * 2.2) CLASES
 */

 class Person {
    private $name;
    protected $age;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

    //*Setters and Getters 
}

?>