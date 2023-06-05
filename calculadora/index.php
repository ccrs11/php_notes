<?php
//var_export($_POST);
//echo "<br>";
// $hola=var_dump($_POST);
$buttons = [1, 2, 3, '+', 4, 5, 6, '-', 7, 8, 9, '*', 'C', 0, '/', '='];
$pressed = '';
if (isset($_POST['pressed']) && in_array($_POST['pressed'], $buttons)) {
   $pressed = $_POST['pressed'];
}
$stored = '';

if (isset($_POST['stored']) && preg_match('~^(?:[\d.]+[*/+-]?)+$~', $_POST['stored'], $out)) {
   $stored = $out[0];
}

$display = $stored . $pressed;
//echo "$pressed & $stored & $display<br>";
if ($pressed == 'C') {
   $display = '';
} elseif ($pressed == '=' && preg_match('~^\d*\.?\d+(?:[*/+-]\d*\.?\d+)*$~', $stored)) {
   if (preg_match('~\/0~',$stored)) {
      //echo "Value contains /0";
      $display = 'syntax error';
   } else{
      $result=eval("return $stored;");
      $display = $result;
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./style.css">
   <title>Formulario</title>
</head>

<body>
   <h1>Calculator</h1>
   <form action="" name="calculator" method="POST">
      <table>
         <tr>
            <td colspan="4">
               <input type="text" name="stored" id="display" value="<?= $display ?>"placeholder="0">
            </td>
         </tr>
         <tr>
            <td><input type="submit" name="pressed" value="7"></td>
            <td><input type="submit" name="pressed" value="8"></td>
            <td><input type="submit" name="pressed" value="9"></td>
            <td><input type="submit" class="operator" name="pressed" value="*">
            </td>
         </tr>
         <tr>
            <td><input type="submit" name="pressed" value="4"></td>
            <td><input type="submit" name="pressed" value="5"></td>
            <td><input type="submit" name="pressed" value="6"></td>
            <td><input type="submit" class="operator" name="pressed" value="-">
            </td>
         </tr>
         <tr>
            <td><input type="submit" name="pressed" value="1"></td>
            <td><input type="submit" name="pressed" value="2"></td>
            <td><input type="submit" name="pressed" value="3"></td>
            <td><input type="submit" class="operator" name="pressed" value="+">
            </td>
         </tr>
         <tr class="clear">
            <td><input type="submit" id="clear" name="pressed" value="C"></td>
            <td><input type="submit" name="pressed" value="0"></td>
            <td><input type="submit" name="pressed" value="="></td>
            <td><input type="submit" class="operator" name="pressed" value="/">
            </td>
         </tr>
      </table>
   </form>
   
</body>

</html>