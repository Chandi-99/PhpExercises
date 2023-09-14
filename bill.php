<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="post" action="billoutput.php">
<table>
<tr>
<td>Item</td>
<td>quantity</td>
<td>Unit price</td>
</tr>

<tr>
<td><select name="item"><option>"Dhal"</option>";
<option>"Rice"</option>
<option>"Washing powder"</option>
<option>"Soap"</option></select>
</td>
<td><input type="text" name="quantity"></td>
<td><input type="text" name="Unit"></td>
</tr>

<tr>
<td><select name="item1"><option>"Dhal"</option>
<option>"Rice"</option>
<option>"Washing powder"</option>
<option>"Soap"</option></select>
</td>
<td><input type="text" name="quantity1"></td>
<td><input type="text" name="Unit1"></td>
</tr>

<tr>
<td><select name="item2"><option>"Dhal"</option>
<option>"Rice"</option>
<option>"Washing powder"</option>
<option>"Soap"</option></select>
</td>
<td><input type="text" name="quantity2"></td>
<td><input type="text" name="Unit2"></td>
</tr>

<tr>
<td><select name="item3"><option>"Dhal"</option>
<option>"Rice"</option>
<option>"Washing powder"</option>
<option>"Soap"</option></select>
</td>
<td><input type="text" name="quantity3"></td>
<td><input type="text" name="Unit3"></td>
</tr>

<tr><td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" value="Buy"></td>
</tr>
</table>

</form>

<?php

$item  = $_GET["item"];
$item1  = $_GET["item1"];
$item2  = $_GET["item2"];
$item3 = $_GET["item3"];

$quan = $_GET["quantity"];
$quan1 = $_GET["quantity1"];
$quan2 = $_GET["quantity2"];
$quan3 = $_GET["quantity3"];

$value = $_GET["unit"];
$value1 = $_GET["unit1"];
$value2 = $_GET["unit2"];
$value3 = $_GET["unit3"];



?>


