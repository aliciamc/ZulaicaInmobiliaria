<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inmobiliaria extends CI_Model {

    public function insertar($ubicacion,$fraccionamiento,$supterreno, $m2xprecio, $supconstr, $valor,$pagoi,$pagores,$disponible,$tipo,$venta,$renta){
          $query="insert into propiedad (ubicacion,fraccionamiento,supterreno,m2xprecio,supconstr,valor,renta,venta,tipo,pagoInicial,pagoResto,disponibilidad)
          values ('$ubicacion','$fraccionamiento','$supterreno','$m2xprecio','$supconstr','$valor','$renta','$venta','$tipo','$pagoi','$pagores','$disponible')";
          $query2= $this->db->query($query);

          if ($query2) {
            echo "exito";

          }
        else {
          echo "fallo";
        }
    }
public function insertarpropietario($propietario,$direc,$telcasa,$telofi,$telcel){
  $query="insert into propietario (Nombre,Apellido,TelefonoCasa,TelefonoOficina,TelefonoCelular,Direccion)
  values ('$propietario','$apellido','$telcasa','$telofi','$telcel','$direc')";
  $query2= $this->db->query($query);

  if ($query2) {
    echo "exito";

  }
else {
  echo "fallo";
}
}

    public function insertarequipo($equipo){
          $query="insert into catEquipo (descripcion) values ('$equipo')";
          $query2= $this->db->query($query);

          if ($query2) {
            echo "exito";

          }
        else {
          echo "fallo";
        }
    }

    public function obtener(){
      $query="select * from propiedad";
      $query2=$this->db->query($query);
      return $query2->result();


    }

    public function obtenerequipo(){
      $query="select * from catEquipo";
      $query2=$this->db->query($query);
      return $query2->result();


    }
}
?>
