<style>


#map {
      height: 400px!important;
      overflow: visible;
    }
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;


  }
  </style>
 <body>

<div class="container">

    <div class="tab-content">
    <div class="tab-pane"  id="formato">
      <!--Aqui empieza formulario de propiedad-->
  <h4>Registro de Propiedad</h4>
  <form class="form-horizontal demo-form" role="form" method="post" action="<?php echo site_url("welcome/post"); ?>">
<div class="form-section">

    <div class="form-group">
      <label class="control-label col-sm-2" for="ubicacion">Ubicación:</label>
      <div class="col-sm-6">
        <input type="text" name="ubicacion" class="form-control" id="ubicacion" placeholder="Ingresar Domicilio">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="fracc">Fraccionamiento:</label>
      <div class="col-sm-6">
        <input type="text" name="fraccionamiento" class="form-control" id="fraccionamiento" placeholder="Ingresar Fraccionamiento">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="fracc">Superficie de Terreno:</label>
      <div class="col-sm-2">
        <input type="text" name="supterreno" class="form-control" id="supterreno" placeholder="Ingresar Superficie de Terreno">
      </div>
      <label class="control-label col-sm-2" for="fracc">Metros cuadrados por$: </label>
      <div class="col-sm-2">
        <input type="text" name="m2xprecio" class="form-control" id="m2xprecio" placeholder="Ingresar m^2 x $">
      </div>
   </div>
<div class="form-group">
      <label class="control-label col-sm-2" for="fracc">Superficie Construida:</label>
      <div class="col-sm-2">
        <input type="text" name="supconstr" class="form-control" id="supconstr" placeholder="Ingresar Superficie Construida">
      </div>

      <label class="control-label col-sm-2" for="valor">Valor Total:</label>
      <div class="col-sm-2">
        <input type="text" name="valor" class="form-control" id="valor" placeholder="Ingresar Valor Total">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-2" for="pagoi">Forma de pago: Inicial</label>
      <div class="col-sm-2">
        <input type="text" name="pagoi" class="form-control" id="pagoi" placeholder="Ingresar Pago Inicial">
      </div>

      <label class="control-label col-sm-2" for="pagoresto">Resto:</label>
      <div class="col-sm-2">
        <input type="text" name="pagoresto" class="form-control" id="pagoresto" placeholder="Ingresar Resto">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-2" for="disponible">Disponibilidad:</label>
      <div class="col-sm-2">
        <input type="text" name="disponible" class="form-control" id="disponible" placeholder="Ingresar Disponibilidad">
      </div>
</div>
</div>

<div class="form-section">







<!--Aqui empieza formulario de propietario-->
<h4>Datos del Propietario</h4>
<div class="form-group">
      <label class="control-label col-sm-2" for="propietario">Nombre del dueño:</label>
      <div class="col-sm-6">
        <input type="text" name="propietario" class="form-control" id="propietario" placeholder="Ingresar Nombre del Dueño">
      </div>
</div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="direccionDueno">Dirección:</label>
      <div class="col-sm-6">
        <input type="text" name="direccionDueno" class="form-control" id="direccionDueno" placeholder="Ingresar Dirección del Dueño">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-2" for="telCasa">Teléfono Casa:</label>
      <div class="col-sm-2">
        <input type="text" name="telCasa" class="form-control" id="telCasa" placeholder="Teléfono de Casa">
      </div>
      <label class="control-label col-sm-2" for="telOfi">Teléfono Oficina:</label>
      <div class="col-sm-2">
        <input type="text" name="telOfi" class="form-control" id="telOfi" placeholder="Teléfono de Oficina">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="telCel">Teléfono Celular:</label>
      <div class="col-sm-2">
        <input type="text" name="telCel" class="form-control" id="telCel" placeholder="Teléfono Celular">
      </div>

</div>
</div>
<!--Aqui empieza formulario de equipo numerico-->
<div class="form-section">
<h4>Equipo y Distribución</h4>

<div class="form-group">
      <label class="control-label col-sm-1" for="plantas">Plantas:</label>
      <div class="col-sm-1">
        <input type="text" name="plantas" class="form-control" id="plantas" placeholder="Número">
      </div>
      <label class="control-label col-sm-1" for="lavado">Área de lavado:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="lavado" class="form-control" id="lavado" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="hidro">Hidro neumático:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="hidro" class="form-control" id="hidro" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="aluminio">Aluminio:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="aluminio" class="form-control" id="aluminio" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="mini">Mini split:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="mini" class="form-control" id="mini" placeholder="Si/No">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="recamaras">Recámaras:</label>
      <div class="col-sm-1">
        <input type="text" name="recamaras" class="form-control" id="recamaras" placeholder="Número">
      </div>
      <label class="control-label col-sm-1" for="cservicio">Cuarto de servicio:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="cservicio" class="form-control" id="cservicio" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="tirol">Tirol planch:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="tirol" class="form-control" id="tirol" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="aluminiob">Aluminio blanco:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="aluminiob" class="form-control" id="aluminiob" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="club">Club deportivo:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="club" class="form-control" id="club" placeholder="Si/No">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="vestidores">Vestidores:</label>
      <div class="col-sm-1">
        <input type="text" name="vestidores" class="form-control" id="vestidores" placeholder="Número">
      </div>
      <label class="control-label col-sm-1" for="cochera">Cochera:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="cochera" class="form-control" id="cochera" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="tirola">Tirol ahulado:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="tirola" class="form-control" id="tirola" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="aluminiog">Aluminio G2:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="aluminiog" class="form-control" id="aluminiog" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="privada">Privada:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="privada" class="form-control" id="privada" placeholder="Si/No">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="baños">Baños:</label>
      <div class="col-sm-1">
        <input type="text" name="baños" class="form-control" id="baños" placeholder="Número">
      </div>
      <label class="control-label col-sm-1" for="porton">Portón eléctrico:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="porton" class="form-control" id="porton" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="pasta">Pasta:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="pasta" class="form-control" id="pasta" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="fierro">Fierro Tub:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="fierro" class="form-control" id="fierro" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="asador">Asador:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="asador" class="form-control" id="asador" placeholder="Si/No">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="mbaños">Medios baños:</label>
      <div class="col-sm-1">
        <input type="text" name="mbaños" class="form-control" id="mbaños" placeholder="Número">
      </div>
      <label class="control-label col-sm-1" for="cblancos">Cuarto de blancos:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="cblancos" class="form-control" id="cblancos" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="yeso">Yeso:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="yeso" class="form-control" id="yeso" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="vidrio">Vidrio tintex:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="vidrio" class="form-control" id="vidrio" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="alarma">Alarma:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="alarma" class="form-control" id="alarma" placeholder="Si/No">
      </div>
</div>
<!--Aqui empieza formulario de equipo binario-->
<div class="form-group">
      <label class="control-label col-sm-1" for="salaco">Sala-Comedor:</label>
      <div class="col-sm-1">
        <input type="text" name="salaco" class="form-control" id="salaco" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="bodega">Bodega:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="bodega" class="form-control" id="bodega" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="aplanado">Aplanado:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="aplanado" class="form-control" id="aplanado" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="pino">Pino:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="pino" class="form-control" id="pino" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="gym">Gimnasio:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="gym" class="form-control" id="gym" placeholder="Si/No">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="recibidor">Recibidor:</label>
      <div class="col-sm-1">
        <input type="text" name="recibidor" class="form-control" id="recibidor" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="vertederos">Vertederos:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="vertederos" class="form-control" id="vertederos" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="alfombra">Alfombra:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="alfombra" class="form-control" id="alfombra" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="cedro">Cedro:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="cedro" class="form-control" id="cedro" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="terra">Terraza:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="terra" class="form-control" id="terra" placeholder="Si/No">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="salajuego">Sala de Juego:</label>
      <div class="col-sm-1">
        <input type="text" name="salajuego" class="form-control" id="salajuego" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="jardin">Jardín:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="jardin" class="form-control" id="jardin" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="loza">Loza barro:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="loza" class="form-control" id="loza" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="banak">Banak:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="banak" class="form-control" id="banak" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="velador">Cuarto de velador:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="velador" class="form-control" id="velador" placeholder="Si/No">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="hall">Hall de TV:</label>
      <div class="col-sm-1">
        <input type="text" name="hall" class="form-control" id="hall" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="riego">Riego Asper:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="riego" class="form-control" id="riego" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="vitro">Vitropiso:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="vitro" class="form-control" id="vitro" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="caobilla">Caobilla:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="caobilla" class="form-control" id="caobilla" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="anuncio">Anuncio:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="anuncio" class="form-control" id="anuncio" placeholder="Si/No">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="estudio">Estudio:</label>
      <div class="col-sm-1">
        <input type="text" name="estudio" class="form-control" id="estudio" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="tinaco">Tinaco:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="tinaco" class="form-control" id="tinaco" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="intercera">Interceramic:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="intercera" class="form-control" id="intercera" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="caoba">Caoba:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="caoba" class="form-control" id="caoba" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="llaves">Laves:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="llaves" class="form-control" id="llaves" placeholder="Si/No">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="despacho">Despacho:</label>
      <div class="col-sm-1">
        <input type="text" name="despacho" class="form-control" id="despacho" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="interphone">Interphone:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="interphone" class="form-control" id="interphone" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="mosaico">Mosaico:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="mosaico" class="form-control" id="mosaico" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="encino">Encino:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="encino" class="form-control" id="encino" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="constru">Construcción:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="constru" class="form-control" id="constru" placeholder="Si/No">
      </div>

</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="cintegral">Cocina Integral:</label>
      <div class="col-sm-1">
        <input type="text" name="cintegral" class="form-control" id="cintegral" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="jacuzzi">Jacuzzi:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="jacuzzi" class="form-control" id="jacuzzi" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="marmol">Marmol:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="marmol" class="form-control" id="marmol" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="bar">Bar:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="bar" class="form-control" id="bar" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="cita">Cita:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="cita" class="form-control" id="cita" placeholder="Si/No">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="cocineta">Cocineta:</label>
      <div class="col-sm-1">
        <input type="text" name="cocineta" class="form-control" id="cocineta" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="tina">Tina:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="tina" class="form-control" id="tina" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="parquet">Parquet:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="parquet" class="form-control" id="parquet" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="chimenea">Chimenea:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="chimenea" class="form-control" id="chimenea" placeholder="Si/No">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="antecomedor">Antecomedor:</label>
      <div class="col-sm-1">
        <input type="text" name="antecomedor" class="form-control" id="antecomedor" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="alberca">Alberca:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="alberca" class="form-control" id="alberca" placeholder="Numero">
      </div>
      <label class="control-label col-sm-1" for="duelam">Duela lam:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="duelam" class="form-control" id="duelam" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="launch">Launch:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="launch" class="form-control" id="launch" placeholder="Si/No">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-1" for="alacena">Alacena:</label>
      <div class="col-sm-1">
        <input type="text" name="alacena" class="form-control" id="alacena" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="aljibe">Aljibe:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="aljibe" class="form-control" id="aljibe" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="duela">Duela:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="duela" class="form-control" id="duela" placeholder="Si/No">
      </div>
      <label class="control-label col-sm-1" for="aire">Aire acondicionado:</label><!--formulario binario -->
      <div class="col-sm-1">
        <input type="text" name="aire" class="form-control" id="aire" placeholder="Si/No">
      </div>

</div>
</div><!--termina div de form-section -->

<div class="form-section">
<div class="form-group">
      <label class="control-label col-sm-1" for="comision">Comisión %:</label>
      <div class="col-sm-2">
        <input type="text" name="comision" class="form-control" id="comision" placeholder="Ingresar Comisión">
      </div>
</div>
    <div class="form-group">
      <label class="control-label col-sm-1" for="opcionador">Opcionador:</label>
      <div class="col-sm-2">
        <input type="text" name="opcionador" class="form-control" id="opcionador" placeholder="Ingresar">
      </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-1" for="fecha">Fecha:</label>

</div>
</div><!--termina div de form-section -->


<!--Aquí empiezan opciones de venta o renta de propiedad-->
<div class="form-section">
<h4>Opción</h4>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-2">
          <label><input type="checkbox"  name="venta" value="1"> Venta</label>
      </div>

      <div class="col-sm-2">
          <label><input type="checkbox" name="renta" value="1"> Renta</label>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-2">
          <label><input type="radio" name="tipo" value="casa"> Casa</label>
        </div>


          <div class=" col-sm-2">
          <label><input type="radio"  name="tipo" value="terreno"> Terreno</label>
        </div>
    <div class="col-sm-2">

          <label><input type="radio" name="tipo" value="departamento"> Departamento</label>

      </div>
    </div>


  <!--  <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Enviar</button>
      </div>
    </div>-->
</div><!--termina div de form-section -->


    <div class="form-navigation">
   <button type="button" class="previous btn btn-info pull-left">&lt; Previous</button>
   <button type="button" class="next btn btn-info pull-right">Next &gt;</button>
   <input type="submit" class="btn btn-default pull-right">
   <span class="clearfix"></span>
 </div>
  </form>
</div>


<div class="tab-pane" id="login">
  <div class="row">
         <div class="col-sm-6 col-md-4 col-md-offset-4">
             <h1 class="text-center login-title">Iniciar sesión para ingresar a Zulaica Inmobiliaria</h1>
             <div class="account-wall">
                 <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                     alt="">
                 <form class="form-signin">
                 <input type="text" class="form-control" placeholder="Usuario" required autofocus>
                 <input type="password" class="form-control" placeholder="Contraseña" required>
                 <button class="btn btn-lg btn-primary btn-block" type="submit">
                     Sign in</button>
                 <label class="checkbox pull-left">
                     <input type="checkbox" value="recordarme">
                     Recordarme
                 </label>
                 <a href="#" class="pull-right need-help">Olvidó su contraseña? </a><span class="clearfix"></span>
                 </form>
             </div>
             <a href="#" class="text-center new-account">Crear usuario </a>
         </div>
     </div>
</div>

<div class="tab-pane fade" id="contacto">
  <div class="container-fluid bg-grey">
    <h2 class="text-center">CONTACTO</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Contáctanos y te responderemos dentro de 24 horas.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span>
          Comunicaciones No. 184 San Luis Potosí, México</p>
        <p><span class="glyphicon glyphicon-phone"></span> 444 254 2517</p>
        <p><span class="glyphicon glyphicon-envelope"></span> zulaicainmobiliaria@gmail.com</p>
      </div>

      <div class="col-sm-7">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Enviar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!--cierra tab de contacto -->
<div class="tab-pane fade" id="busqueda">
  <table class="table table-hover">
    <tr><th>id</th><th>Ubicacion</th><th>Fraccionamiento</th><th>Superficie de Terreno</th><th>Metros Cuadrados por $</th><th>Superficie Construida</th><th>Valor Total</th>

  <?php

$i=1;
foreach ($datos  as $datos ) { ?>
<tr> <td><?=$i?></td><td> <?= $datos->Ubicacion ?></td> <td> <?= $datos->Fraccionamiento ?></td><td> <?= $datos->SupTerreno ?></td><td> <?= $datos->M2xprecio ?></td><td> <?= $datos->SupConstr ?></td>
  <td> <?= $datos->Valor ?></td></tr>



<?php $i++; }




   ?>
 </table>
</div>

<div class="tab-pane fade" id="regequipo">
  <form class="form-horizontal" role="form" method="post" action="<?php echo site_url("welcome/postequipo"); ?>">
    <h4>Equipo y Distribución</h4>

    <div class="form-group">
          <label class="control-label col-sm-1" for="plantas">Plantas:</label>
          <div class="col-sm-1">
            <input type="text" name="plantas" class="form-control" id="plantas" placeholder="Número">
          </div>
          <label class="control-label col-sm-1" for="lavado">Área de lavado:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="lavado" class="form-control" id="lavado" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="hidro">Hidro neumático:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="hidro" class="form-control" id="hidro" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="aluminio">Aluminio:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="aluminio" class="form-control" id="aluminio" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="mini">Mini split:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="mini" class="form-control" id="mini" placeholder="Si/No">
          </div>
    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="recamaras">Recámaras:</label>
          <div class="col-sm-1">
            <input type="text" name="recamaras" class="form-control" id="recamaras" placeholder="Número">
          </div>
          <label class="control-label col-sm-1" for="cservicio">Cuarto de servicio:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="cservicio" class="form-control" id="cservicio" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="tirol">Tirol planch:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="tirol" class="form-control" id="tirol" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="aluminiob">Aluminio blanco:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="aluminiob" class="form-control" id="aluminiob" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="club">Club deportivo:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="club" class="form-control" id="club" placeholder="Si/No">
          </div>
    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="vestidores">Vestidores:</label>
          <div class="col-sm-1">
            <input type="text" name="vestidores" class="form-control" id="vestidores" placeholder="Número">
          </div>
          <label class="control-label col-sm-1" for="cochera">Cochera:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="cochera" class="form-control" id="cochera" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="tirola">Tirol ahulado:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="tirola" class="form-control" id="tirola" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="aluminiog">Aluminio G2:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="aluminiog" class="form-control" id="aluminiog" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="privada">Privada:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="privada" class="form-control" id="privada" placeholder="Si/No">
          </div>
    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="baños">Baños:</label>
          <div class="col-sm-1">
            <input type="text" name="baños" class="form-control" id="baños" placeholder="Número">
          </div>
          <label class="control-label col-sm-1" for="porton">Portón eléctrico:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="porton" class="form-control" id="porton" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="pasta">Pasta:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="pasta" class="form-control" id="pasta" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="fierro">Fierro Tub:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="fierro" class="form-control" id="fierro" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="asador">Asador:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="asador" class="form-control" id="asador" placeholder="Si/No">
          </div>
    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="mbaños">Medios baños:</label>
          <div class="col-sm-1">
            <input type="text" name="mbaños" class="form-control" id="mbaños" placeholder="Número">
          </div>
          <label class="control-label col-sm-1" for="cblancos">Cuarto de blancos:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="cblancos" class="form-control" id="cblancos" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="yeso">Yeso:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="yeso" class="form-control" id="yeso" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="vidrio">Vidrio tintex:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="vidrio" class="form-control" id="vidrio" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="alarma">Alarma:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="alarma" class="form-control" id="alarma" placeholder="Si/No">
          </div>
    </div>
    <!--Aqui empieza formulario de equipo binario-->
    <div class="form-group">
          <label class="control-label col-sm-1" for="salaco">Sala-Comedor:</label>
          <div class="col-sm-1">
            <input type="text" name="salaco" class="form-control" id="salaco" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="bodega">Bodega:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="bodega" class="form-control" id="bodega" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="aplanado">Aplanado:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="aplanado" class="form-control" id="aplanado" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="pino">Pino:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="pino" class="form-control" id="pino" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="gym">Gimnasio:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="gym" class="form-control" id="gym" placeholder="Si/No">
          </div>
    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="recibidor">Recibidor:</label>
          <div class="col-sm-1">
            <input type="text" name="recibidor" class="form-control" id="recibidor" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="vertederos">Vertederos:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="vertederos" class="form-control" id="vertederos" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="alfombra">Alfombra:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="alfombra" class="form-control" id="alfombra" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="cedro">Cedro:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="cedro" class="form-control" id="cedro" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="terra">Terraza:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="terra" class="form-control" id="terra" placeholder="Si/No">
          </div>
    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="salajuego">Sala de Juego:</label>
          <div class="col-sm-1">
            <input type="text" name="salajuego" class="form-control" id="salajuego" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="jardin">Jardín:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="jardin" class="form-control" id="jardin" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="loza">Loza barro:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="loza" class="form-control" id="loza" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="banak">Banak:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="banak" class="form-control" id="banak" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="velador">Cuarto de velador:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="velador" class="form-control" id="velador" placeholder="Si/No">
          </div>
    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="hall">Hall de TV:</label>
          <div class="col-sm-1">
            <input type="text" name="hall" class="form-control" id="hall" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="riego">Riego Asper:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="riego" class="form-control" id="riego" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="vitro">Vitropiso:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="vitro" class="form-control" id="vitro" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="caobilla">Caobilla:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="caobilla" class="form-control" id="caobilla" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="anuncio">Anuncio:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="anuncio" class="form-control" id="anuncio" placeholder="Si/No">
          </div>
    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="estudio">Estudio:</label>
          <div class="col-sm-1">
            <input type="text" name="estudio" class="form-control" id="estudio" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="tinaco">Tinaco:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="tinaco" class="form-control" id="tinaco" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="intercera">Interceramic:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="intercera" class="form-control" id="intercera" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="caoba">Caoba:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="caoba" class="form-control" id="caoba" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="llaves">Laves:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="llaves" class="form-control" id="llaves" placeholder="Si/No">
          </div>
    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="despacho">Despacho:</label>
          <div class="col-sm-1">
            <input type="text" name="despacho" class="form-control" id="despacho" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="interphone">Interphone:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="interphone" class="form-control" id="interphone" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="mosaico">Mosaico:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="mosaico" class="form-control" id="mosaico" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="encino">Encino:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="encino" class="form-control" id="encino" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="constru">Construcción:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="constru" class="form-control" id="constru" placeholder="Si/No">
          </div>

    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="cintegral">Cocina Integral:</label>
          <div class="col-sm-1">
            <input type="text" name="cintegral" class="form-control" id="cintegral" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="jacuzzi">Jacuzzi:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="jacuzzi" class="form-control" id="jacuzzi" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="marmol">Marmol:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="marmol" class="form-control" id="marmol" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="bar">Bar:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="bar" class="form-control" id="bar" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="cita">Cita:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="cita" class="form-control" id="cita" placeholder="Si/No">
          </div>
    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="cocineta">Cocineta:</label>
          <div class="col-sm-1">
            <input type="text" name="cocineta" class="form-control" id="cocineta" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="tina">Tina:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="tina" class="form-control" id="tina" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="parquet">Parquet:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="parquet" class="form-control" id="parquet" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="chimenea">Chimenea:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="chimenea" class="form-control" id="chimenea" placeholder="Si/No">
          </div>
    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="antecomedor">Antecomedor:</label>
          <div class="col-sm-1">
            <input type="text" name="antecomedor" class="form-control" id="antecomedor" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="alberca">Alberca:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="alberca" class="form-control" id="alberca" placeholder="Numero">
          </div>
          <label class="control-label col-sm-1" for="duelam">Duela lam:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="duelam" class="form-control" id="duelam" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="launch">Launch:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="launch" class="form-control" id="launch" placeholder="Si/No">
          </div>
    </div>
    <div class="form-group">
          <label class="control-label col-sm-1" for="alacena">Alacena:</label>
          <div class="col-sm-1">
            <input type="text" name="alacena" class="form-control" id="alacena" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="aljibe">Aljibe:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="aljibe" class="form-control" id="aljibe" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="duela">Duela:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="duela" class="form-control" id="duela" placeholder="Si/No">
          </div>
          <label class="control-label col-sm-1" for="aire">Aire acondicionado:</label><!--formulario binario -->
          <div class="col-sm-1">
            <input type="text" name="aire" class="form-control" id="aire" placeholder="Si/No">
          </div>

    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="ubicacion">Ubicación:</label>
      <div class="col-sm-6">
        <button type="submit">Aceptar</button>
      </div>
    </div>
</div>
<div class="tab-pane active"  id="home">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="<?php echo base_url("assets/zulaica.jpg");?>" alt="Portada" width="460" height="505">
        <div class="carousel-caption">
          <h2></h2>
          <p2>Renta y Venta de Inmuebles en la ciudad de San Luis Potosí.</p2>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url("assets/casa2.jpg");?>" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h2>Zulaica Inmobiliaria</h2>
          <p4>Somos una empresa ubicada en la ciudad de San Luis Potosí dedicada
            a lograr la satisfacción de nuestros clientes con el respaldo de personal altamente calificado. </p4>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url ("assets/bannerclientes.jpg");?>" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Zulaica Inmobiliaria</h3>
          <p>Nuestros clientes son nuestro mejor aval y razón que día a día nos mueve a seguir trabajando
            para mejorar como empresa con el objetivo de proporcionar siempre un servicio seguro de alta calidad y honesto.</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url("assets/casa4.jpg");?>" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Zulaica Inmobiliaria</h3>
          <p>Renta Y Venta De Departamentos De Lujo</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="tab-pane " id="ubicaciones" onmouseover="mapa();">

<script>
  function mapa(){
  google.maps.event.trigger(map,'resize');
};
function initMap() {
var myLatLng = {lat: 22.15556, lng: -100.98556};

var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 4,
  center: myLatLng
});
google.maps.event.trigger(map,'resize');
var marker = new google.maps.Marker({
  position: myLatLng,
  map: map,
  title: 'Hello World!'
});
}

</script>
  <div id="map">

  </div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb0pMPi5f4xZNVXEgUXrwUx5B7Y4oetO4&callback=initMap" defer>
  </script>



</div>



</div><!--cierra tab de content poner entre estos cualquier paner adicional-->

</div>

</div><!--cierra tab de container -->

<script>

$(function () {
  var $sections = $('.form-section');

  function navigateTo(index) {
    // Mark the current section with the class 'current'
    $sections
      .removeClass('current')
      .eq(index)
        .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    $('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= $sections.length - 1;
    $('.form-navigation .next').toggle(!atTheEnd);
    $('.form-navigation [type=submit]').toggle(atTheEnd);
  }

  function curIndex() {
    // Return the current index by looking at which section has the class 'current'
    return $sections.index($sections.filter('.current'));
  }

  // Previous button is easy, just go back
  $('.form-navigation .previous').click(function() {
    navigateTo(curIndex() - 1);
  });

  // Next button goes forward iff current block validates
  $('.form-navigation .next').click(function() {
    if ($('.demo-form').parsley().validate({group: 'block-' + curIndex()}))
      navigateTo(curIndex() + 1);
  });

  // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
  $sections.each(function(index, section) {
    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
  });
  navigateTo(0); // Start at the beginning
});







</script>
</body>
