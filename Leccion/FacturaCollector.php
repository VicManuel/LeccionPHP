<?php

include_once('factura.php');
include_once('Collector.php');

class FacturaCollector extends Collector
{
  
  function showFactura($id) {
    $row = self::$db->getRows("SELECT * FROM demo where iddemo= ? ", array("{$id}")); 
    $ObjDemo = new Demo($row[0]{'iddemo'},$row[0]{'nombre'});
    return $ObjDemo;
  }

  function createFactura($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.demo (iddemo, nombre) VALUES (?, ?)", array(null, "{$nombre}"));
  }  

  function readDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'iddemo'},$c{'nombre'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
  
  function updateFactura($id,$nombre) {    
    $insertrow = self::$db->updateRow("UPDATE clasedb.demo SET demo.nombre = ?  WHERE demo.iddemo = ? ", array( "{$nombre}",$id));
  }  

  function deleteFactura($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clasedb.demo WHERE iddemo= ?", array("{$id}"));
  }  



}
?>