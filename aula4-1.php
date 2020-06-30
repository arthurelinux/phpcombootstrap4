<?php
$a = $_POST['valor1'];
$b = $_POST['valor2'];

//==
//!=
//<
//>
//>=
//<= 
// && E
// || OU

if($a == $b){
 $OK = "Valor ok";
} 
else{
	$OK = "valore diferente";
}

echo $OK;
?>