<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
//$this->load->model('inmobiliaria');
//$datos['equipo']=$this->inmobiliaria->obtener();
//$this->load->view('headers');
//$this->load->view('formato',$datos);
$this->load->view('headers');
$this->load->model('inmobiliaria');
$data['datos']=$this->inmobiliaria->obtener();
$this->load->view('formato',$data);


/*$this->load->view('welcome_message');*/


	}
public function equipo(){
	$this->load->view('headers');
	$this->load->view('equipo');
}

public function parsley(){
	$this->load->view('headers');
	$this->load->view('parsley');
}

public function postequipo(){
	$equipo=$this->input->post("equipo");
	$this->load->model('inmobiliaria');
	$this->inmobiliaria->insertarequipo($equipo);
	redirect("welcome/index");
}

public function contacto(){
	$this->load->view('headers');
	$this->load->view('contacto');
}

public function post(){
$ubicacion=$this->input->post("ubicacion");
$fraccionamiento=$this->input->post("fraccionamiento");
$supterreno=$this->input->post("supterreno");
$m2xprecio=$this->input->post("m2xprecio");
$supconstr=$this->input->post("supconstr");
$valor=$this->input->post("valor");
$pagoi=$this->input->post("pagoi");
$pagores=$this->input->post("pagoresto");
$disponible=$this->input->post("disponible");
$propietario=$this->input->post("propietario");
$direccionDueno=$this->input->post("direccionDueno");
$telcasa=$this->input->post("telCasa");
$telofi=$this->input->post("telOfi");
$telcel=$this->input->post("telCel");

$tipo=$this->input->post("tipo");
$venta=$this->input->post("venta");
$renta=$this->input->post("renta");

$this->load->model('inmobiliaria');
$this->inmobiliaria->insertar($ubicacion,$fraccionamiento,$supterreno, $m2xprecio, $supconstr, $valor,$pagoi,$pagores,$disponible,$tipo,$venta,$renta);
$this->inmobiliaria->insertarpropietario($propietario,$direccionDueno,$telcasa,$telofi,$telcel);

redirect("welcome/index");
}

public function obtener(){
	$this->load->view('headers');
	$this->load->model('inmobiliaria');
	$data['datos']=$this->inmobiliaria->obtener();
	$this->load->view('obtener',$data);

}
public function mapa()
{


	$this->load->view("mapa");
}

public function busqueda(){

	$this->load->view('headers');
	//$this->load->view('vistabusqueda');
	echo "busqudas";

}
	public function registro(){

		$primera=$this->input->post("prim");
		$segunda=$this->input->post("seg");
		$tercera=$this->input->post("ter");
		$cuarta=$this->input->post("cuar");
		echo $primera."<br>".$segunda."<br>".$tercera."<br>".$cuarta;

	}
}
?>
