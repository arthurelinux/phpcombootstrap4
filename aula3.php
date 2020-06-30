<!DOCTYPE html>
<html>
<head>
	<title>Operadores Lógicos</title>
<?php


?>
</head>
<body>

<form method="POST" action="">

<input type="text" name="valor1">
<input type="text" name="valor2">
<input type="submit" name="enviar">
	
</form>

<?php
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
if (isset($valor1, $valor2)) {
	
$valor1 = 0;
$valor2 = 0;
} else{
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
}


if ($valor1 == $valor2) {
	echo "os valores são iguais";
} else {
	echo "os valores são diferentes";
}


?>




</body>
</html>