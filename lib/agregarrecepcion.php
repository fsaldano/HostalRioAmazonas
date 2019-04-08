<?php
include ("recepcion.php");
include ("constantes.php");

echo "<pre>";
var_dump($_POST);
echo "</pre>";

$Reseption=new recepcion(  $_POST["Name"], 
                           $_POST["Email"],                                 
                           $_POST["Region"], 
                           $_POST["TipoLenguaje"], 
                           $_POST["DateCheckIn"], 
                           $_POST["DateCheckout"]);
        

if(isset($_SESSION["saldano"])){
    $arreReservation=$_SESSION["saldano"]; 
}

$arreReservation[]=$Reseption;
$_SESSION["saldano"]=$arreReservation;

    
echo "<pre>";
var_dump( $_SESSION["saldano"]);
echo "</pre>";

