<?php
include('../lib/recepcion.php');
include('../lib/constantes.php');
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
                    <h1>Titulo de la página</h1>
                </div>
            </header>
        
            <section>
                <div class="contenedorRes">

                    <form class="fa" action="../lib/agregarrecepcion.php" method="POST"> 
                        <div class="form-group">
                            <label for="lblname">Name</label>   
                            <input id="Name" class="form-control" name="Name" type="text" placeholder="Name" required="">
                        </div>
                        <div class="form-group">
                            <label for="lblemail">Email</label>   
                            <input id="Email" class="form-control" name="Email" type="email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <label for="lblregion">Region</label> 
                            <input class="form-control" list="Region" name="Region"/>
                        <datalist id="Region">
                            <option value="Europe">Europe</option>
                            <option value="USA">USA</option>
                            <option value="Asia">Asia</option> 
                            <option value="Africa">Africa</option> 
                            <option value="South America">South America</option> 
                        </datalist>
                        </div>
                        <div class="form-group">
                            <label for="lbltipolenguaje">Lenguaje</label> 
                            <input class="form-control" list="TipoLenguaje" name="TipoLenguaje"/>
                        <datalist id="TipoLenguaje">
                            <option value="Ingles">Ingles</option>
                            <option value="Espanol">Español</option>                            
                        </datalist> 
                        </div>                       
                        <div class="form-group">
                            <label for="lbldatecheckin">Date CheckIn</label>   
                            <input id="Name" class="form-control" name="DateCheckIn" type="date" placeholder="DateCheckIn" required="">
                        </div>
                        <div class="form-group">
                            <label for="lbldatecheckout">Date CheckIn</label>   
                            <input id="Name" class="form-control" name="DateCheckout" type="date" placeholder="DateCheckout" required="">
                        </div>                       
                        <br>
                        <input type="submit" class="btn btn-primary" value="Enviar">                     
                    </form>
                    <div<p><a href="<?=URLBASE;?>" class="btn btn-primary">Volver</a></p><br> <input  type="button" value="" />
                </div>
                
                
            </section>
        </div>
        <footer>
            <div class='define'>
                <p>Antonio Varas #666, Fono de contacto: 000000000</p><br>                
            </div>
        </footer>      
    </body>
</html>
