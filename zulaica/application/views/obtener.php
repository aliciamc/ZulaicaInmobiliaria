<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="2">
      <tr><th>id</th><th>Ubicacion</th><th>Fraccionamiento</th><th>Superficie de Terreno</th><th>Metros Cuadrados por $</th><th>Superficie Construida</th><th>Valor Total</th>

    <?php

$i=1;
foreach ($datos as $datos ) { ?>
  <tr> <td><?=$i?></td><td> <?= $datos->Ubicacion ?></td> <td> <?= $datos->Fraccionamiento ?></td><td> <?= $datos->SupTerreno ?></td><td> <?= $datos->M2xprecio ?></td><td> <?= $datos->SupConstr ?></td>
    <td> <?= $datos->Valor ?></td></tr>



<?php $i++; }




     ?>
   </table>
  </body>
</html>
