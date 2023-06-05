<?php
/**
** 1.8 isset and empthy
** isset the variable is defined and it's value is null
** empthy the variable is void
*/
$lista=[];
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

echo str_repeat(30,"-----");






?>
