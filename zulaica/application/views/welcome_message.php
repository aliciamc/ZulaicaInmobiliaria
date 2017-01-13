<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Zulaica Inmobiliaria</title>
	<style>
	body{
		font-family: Arial. "Helvetica";

	}
	</style>
</head>
<body>
	<div id="container">
		<h1>Zulaica Inmobiliaria</h1>
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Registro</div>
		  <div class="panel-body">

		  </div>
			<form class="form-horizontal" role="form">
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="propietario">Nombre de Propietario:</label>
		    <div class="col-sm-10">
		      <input type="propietario" class="form-control" id="propietario" placeholder="Ingresar Nombre de Propietario">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="colonia">Colonia:</label>
		    <div class="col-sm-10">
		      <input type="colonia" class="form-control" id="col" placeholder="Ingresar Colonia">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
		        <label><input type="checkbox">Venta</label>
						<label><input type="checkbox">Renta</label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Guardar</button>
		    </div>
		  </div>
		</form>
</body>
</html>
