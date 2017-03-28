<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <meta name="robots" content="noindex, nofollow">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<!--
OJO:
En lo que sigue voy a escribir un array multidimensional en PHP,
lo hago para simular un documento Excel con 5 filas.
Luego podrás ver que llamo a cada dato según el lugar que ocupa en el array,
lo que podría ser muy parecido a llamar al valor de cada celda de fila

También la podríamos hacer más fácil con JSON.

Pero creo que ya queda clara una idea:

Mejor usar programación que nos permitan generar texto legible;
con imágenes los resultados son invisibles para las máquinas…
y no se puede hacer "copipeist"

-->

<?php
$datos = array(
array("45_Tsunami",82,168,95,30,12,27,4,8,"The icon needs to be redesigned.", "Este icono requiere ser diseñado.","http://www.guemil.info/wp-content/uploads/2016/07/45_Gv05-Tsunami.svg"),
array("09_Authority_instruction",78,168,95,30,12,27,4,8,"The icon needs to be discarded.", "Este icono debe ser descartado.","http://www.guemil.info/wp-content/uploads/2016/07/09_Gv05-Authority_instruction.svg"),
array("44_Volcano_ashes",72,168,95,30,12,27,4,8,"The icon needs to be discarded.", "Este icono debe ser descartado.","http://www.guemil.info/wp-content/uploads/2016/07/44_Gv05b-Volcano_ashes.svg"),
array("17_Evacuate_fast",92,168,95,30,12,27,4,8,"The icon is the foxy lady.", "Este icono está la zorra.","http://www.guemil.info/wp-content/uploads/2016/07/17_Gv05-Evacuate_fast.svg"),
array("49_Avalanche",88,168,95,30,12,27,4,8,"The icon needs to be redesigned.", "Este icono requiere ser diseñado.","http://www.guemil.info/wp-content/uploads/2016/07/49_Gv05b-Avalanche.svg"),
array("48_Alluvium",92,168,95,30,12,27,4,8,"The icon is the foxy lady.", "Este icono está la zorra.","http://www.guemil.info/wp-content/uploads/2016/07/48_Gv05-Alluvium.svg"),
);
?>

<!--ahora comienzo con la cuestión, podrás notar que uso Bootstrap para simplificarme la vida-->

<div class="container">
<div class="row">

  <?php for ($i = 0; $i < $veces = count($datos); $i++) {?>
  <!--comienza la tarjeta-->
  <div class="col-sm-6 col-md-4 suple">
  <article class="<?php
  if($datos[$i][1] <= 80){echo('no-logrado');}
  elseif($datos[$i][1] > 80 && $datos[$i][1] <= 90){echo('medianamente-logrado');}
  else{echo('logrado');};
  ?>">
    <header class="row">
    <div class="col-xs-6"><img src="<?php echo($datos[$i][11]);?>" /></div>
    <div class="col-xs-6"><h1><?php echo($datos[$i][1]);?><span class="porcentaje">%</span></h1><p>Performance <span lang="es">Desempeño</es></p></div>
    <div class="col-xs-12"><h2><?php echo($datos[$i][0]);?></h2></div>
    </header>
    <section>
    <h3>Meaning <span lang="es">Significado</span> <span class="pull-right"><a role="button" data-toggle="collapse" href="#collapseExample<?php echo($i+1);?>" aria-expanded="false" aria-controls="collapseExample"><?php echo($datos[$i][2]);?></a> Answers <span lang="es">Respuestas</span></span></h3>
    <div class="collapse" id="collapseExample<?php echo($i+1);?>">
    <div class="table-responsive">
    <table class="table">
    <tr>
    <td><h4><?php echo($datos[$i][3]);?></h4> <p>Correct<br /><span lang="es">Correcto</span></p></td>
    <td><h4><?php echo($datos[$i][4]);?></h4> <p>Almost correct<br /><span lang="es">Casi correcto</span></p></td>
    <td><h4><?php echo($datos[$i][5]);?></h4> <p>Doubtful<br /><span lang="es">Dudoso</span></p></td>
    </tr>
    <tr>
    <td><h4><?php echo($datos[$i][6]);?></h4> <p>Incorrecto<br /><span lang="es">incorrecto</span></p></td>
    <td><h4><?php echo($datos[$i][7]);?></h4> <p>Opposite<br /><span lang="es">opuesto</span></p></td>
    <td><h4><?php echo($datos[$i][8]);?></h4> <p>No answer<br /><span lang="es">Sin respuesta</span></p></td>
    </tr>
    </table>
    </div>
    </div><!--collapse-->
    </section>
    <footer>
    <h3>Action <span lang="es">Acción</span></h3>
    <p><?php echo($datos[$i][9]);?></p>
    <p lang="es"><?php echo($datos[$i][10]);?></p>
    </footer>
  </article>
  </div>
  <!--termina tarjeta-->

<?php };?>

</div><!--row-->
</div><!--container-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
