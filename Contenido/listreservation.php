<?php
include('../lib/recepcion.php');
include('../lib/constantes.php');

if (isset($_SESSION["saldano"])){
    $arreReservation=$_SESSION["saldano"];
}else{
    $arreReservation="";
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOSTALRIOAMAZONAS RESERVATION ONLINE</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
    </head>
    <body>
        
       <div id="wrapper">
            <header>
                <div class='define'>
                    <h1>LIST RESERVATION</h1>
                </div>
            </header>
        
            <section>
                <div class="contenedor">
                    
                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Region</th>
                                    <th>Languaje</th>
                                    <th>Date Chekin</th>
                                    <th>Date Chekout</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (is_array($arreReservation)){
                                foreach ($arreReservation as $key => $Reseption) {
                                    
                                ?>
                                <tr>
                                    <td><?=$key +1;?></td>
                                    <td><?=$Reseption->getName();?></td>
                                    <td><?=$Reseption->getEmail();?></td>
                                    <td><?=$Reseption->getRegion();?></td>
                                    <td><?=$Reseption->getTipoLenguaje();?></td>
                                    <td><?=$Reseption->getDateCheckIn();?></td>
                                    <td><?=$Reseption->getDateCheckout();?></td>
                                    <td><input type="button" value="Eliminar" onclick="feliminar(<?=$Reseption->getName();?>);"> <input type="button" value="Editar"></td>
                                </tr>
                                <?php }} ?>
                                
                            </tbody>
                        </table>
                        
                        <form id="formelimina" action="../lib/eliminarecepcion.php" method="post">
                            <input type="hidden" value="" name="Eliminar_nombre" id="Eliminar_nombre">
                        </form> 
                    
                        <div<p><a href="<?=URLBASE;?>">Volver</a></p><br> <input type="button" value="" />
                </div>
                
                
            </section>
        </div>
        <footer>
            <div class='define'>
                <p>Antonio Varas #666, Fono de contacto: 000000000</p><br>
                
            </div>
        </footer>        
    </body>
    <script>
        function feliminar(nombre){
            resp=confirm("Esta seguro de eliminar");
            if(resp){
                $("#Eliminar_nombre").val(nombre);
                $("#formelimina").submit();
             }
        }
        $("#eliminar").click(function(){
            $.post( "../lib/eliminarecepcion.php", { Eliminar_nombre:$("#elinombre").val() });
        });
    </script>
</html>

