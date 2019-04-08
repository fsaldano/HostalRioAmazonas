<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of recepcion
 *
 * @author Casa
 */
class recepcion {
     private $name;
     private $email;     
     private $region;       /*(Europe, USA, Asia, Africa u South America), */
     private $TipoLenguaje; /*Ingles Language(Si o No), */
     private $DateCheckIn;  /*(fecha de ingreso), */
     private $DateCheckout; /*(fecha salida)*/
     
     
     function __construct($name, $email, $region, $TipoLenguaje, $DateCheckIn, $DateCheckout) {
         $this->name = $name;
         $this->email = $email;         
         $this->region = $region;
         $this->TipoLenguaje = $TipoLenguaje;
         $this->DateCheckIn = $DateCheckIn;
         $this->DateCheckout = $DateCheckout;
     }

     function getName() {
         return $this->name;
     }

     function getEmail() {
         return $this->email;
     }

     function getRegion() {
         return $this->region;
     }

     function getTipoLenguaje() {
         return $this->TipoLenguaje;
     }

     function getDateCheckIn() {
         return $this->DateCheckIn;
     }

     function getDateCheckout() {
         return $this->DateCheckout;
     }

     function setName($name) {
         $this->name = $name;
     }

     function setEmail($email) {
         $this->email = $email;
     }

     function setRegion($region) {
         $this->region = $region;
     }

     function setTipoLenguaje($TipoLenguaje) {
         $this->TipoLenguaje = $TipoLenguaje;
     }

     function setDateCheckIn($DateCheckIn) {
         $this->DateCheckIn = $DateCheckIn;
     }

     function setDateCheckout($DateCheckout) {
         $this->DateCheckout = $DateCheckout;
     }


}
