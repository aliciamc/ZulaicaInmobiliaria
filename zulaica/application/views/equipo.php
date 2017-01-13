<div class="container">
  <h2>Formato</h2>
  <form class="form-horizontal" role="form" method="post" action="<?php echo site_url("welcome/postequipo"); ?>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="equipo">Equipo</label>
      <div class="col-sm-7">
        <input type="text" name="equipo" class="form-control" id="equipo" placeholder="Ingresa el nombre del equipo">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="Enviar"class="btn btn-default"></input>
      </div>
    </div>

  </form>
  </div>
