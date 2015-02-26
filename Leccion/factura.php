<?php

class Factura
{
    private $idfactura;
    private $descripcion;
    private $total;
    
     function __construct($idfactura, $descripcion,$total) {
       $this->idfactura = $idfactura;
       $this->descripcion = $descripcion;
       $this->total = $total;
     }
    
     function setidfactura($idfactura){
       $this->idfactura = $idfactura;
     } 
     function getidfactura(){
       return $this->idfactura;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
     function setTotal($total){
       $this->total = $total;
     } 
     function getTotal(){
       return $this->total;
     } 
}

?> 
