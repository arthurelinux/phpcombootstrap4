<?php
include("view/header.php");
$pagina ="home";

if(isset($_GET['i'])){
    $pagina = addslashes($_GET['i']);
}

if($pagina == "home"){
    include("view/home.php");
} else if ($pagina== "sobre"){
    include("view/sobre.php");
}

include("view/footer.php");


?>