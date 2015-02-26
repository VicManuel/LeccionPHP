<?php

class Gasolina
{
    private $idRUC;
    private $nombre;
    private $cantidad;
    private $precio;
    private $subtotal;
    private $total;
    define('IVA', '.12');

    

     function __construct($idRUC, $nombre, $cantidad,$precio,$subtotal,$total,$IVA) {
       $this->idRUC = $idRUC;
       $this->nombre = $nombre;
       $this->cantidad = $cantidad;
       $this->precio = $precio;
       $this->subtotal = $subtotal;
       $this->total = $total;
       $this->IVA = $IVA;
     }
    
     function setIdRUC($idRUC){
       $this->idRUC = $idRUC;
     } 
     function getIdRUC(){
       return $this->idRUC;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     function setCantidad($cantidad){
       $this->cantidad = $cantidad;
     } 
     function getCantidad(){
       return $this->cantidad;
     } 
     function setPrecio($precio){
       $this->precio = $precio;
     } 
     function getPrecio(){
       return $precio->precio;
     }
     function setSubtotal($subtotal){
       $this->subtotal = $subtotal;
     } 
     function getSubtotal(){
       return $subtotal->subtotal;
     } 
     function setTotal($total){
       $this->total = $total;
     } 
     function getTotal(){
       return $total->total;
     } 
     function setIVA($IVA){
       $this->IVA = $IVA;
     } 
     function getIVA(){
       return $IVA->IVA;
     }  
}

?> 