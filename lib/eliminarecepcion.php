<?php
include ("recepcion.php");
include ("constantes.php");

$sNombre=$_POST["Eliminar_nombre"];

$contador=0;
if (isset($_SESSION["saldano"])){
     $arreReservation=$_SESSION["saldano"]; 
     foreach ($arreReservation as $key => $Reseption) {
         if($Reseption->getName()==$sNombre){
             unset($arreReservation[$key]);
             $_SESSION["saldano"]=$arreReservation;
             $contador++;
             
         }
     }
     
} 

if($contador>=1){
     header("location:".URLBASE."contenido/listreservation.php");
     
}
