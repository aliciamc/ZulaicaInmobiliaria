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
<div class=”container”>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Inmobiliaria Zulaica</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Formulario <span class="sr-only">(current)</span></a></li>
        <li><a href="#segundo" data-toggle="tab">Segundo Formulario</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Cerrar Sesión</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="tab-content"><!--div principal -->
 <div class="tab-pane" id="segundo">
 <div class="modalfade">
    <div class="col-lg-6 col-lg-offset-3"><!--define longitud de este panel-->
      <div class="panel-heading"><!--encabezado de panel-->
        <h3 class="panel-title" id="actualiza">Formulario 2</h3><!--encabezado de titulo-->
        <form method="post" action="<?=site_url("welcome/registro")?>" >
                  <div class="input group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="prim">
          </div>

          <div class="input-group">
            <input type="text" class="form-control" placeholder="Recipient´s username" aria-describedby="basic-addon2" name="seg">
            <span class="input-group-addon" id="basic-addon2">@example.com</span>
          </div>

          <div class="input-group">
            <span class="input-group-addon">$</span>
            <input type="text" class="form-control" aria-describedby="Amount (to the nearest dollar)" name="ter">
            <span class="input-group-addon">.00</span>
          </div>

          <label form="basic-url">Your vanity URL</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="cuar">
          </div>
          <div class="btn-group">
            <button type="submit" class="btn btn-primary">
              Action
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>
