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
En lo que sigue voy a escribir algunas variables en PHP,
son unos array que simulan filas de datos en Excel.
Luego podrás ver que llamo a cada dato según el lugar que ocupa en el array,
lo que podría ser muy parecido a llamar al valor de cada celda de fila

También la podríamos hacer más fácil con JSON.

Pero creo que ya queda clara una idea:

Mejor usar programación que nos permitan generar texto legible;
con imágenes los resultados son invisibles para las máquinas…
y no se puede hacer "copipeist"

-->

<?php
$primera=array("45_Tsunami",82,168,95,30,12,27,4,8,"The icon needs to be redesigned.", "Este icono requiere ser diseñado.","http://www.guemil.info/wp-content/uploads/2016/07/45_Gv05-Tsunami.svg");
$segunda=array("09_Authority_instruction",78,168,95,30,12,27,4,8,"The icon needs to be redesigned.", "Este icono requiere ser diseñado.","http://www.guemil.info/wp-content/uploads/2016/07/09_Gv05-Authority_instruction.svg");
$tercera=array("17_Evacuate_fast",92,168,95,30,12,27,4,8,"The icon needs to be redesigned.", "Este icono requiere ser diseñado.","http://www.guemil.info/wp-content/uploads/2016/07/17_Gv05-Evacuate_fast.svg");
?>

    <div class="container">
      <div class="row">

        <!--comienza la primera tarjeta-->
        <div class="col-sm-6 col-md-4 suple">
          <article>
            <header class="row">
            <div class="col-xs-6"><img src="<?php echo($primera[11]);?>" /></div>
            <div class="col-xs-6"><h1 style="<?php echo($estilo);?>"><?php echo($primera[1]);?><span class="porcentaje">%</span></h1><p>Performance <span lang="es">Desempeño</es></p></div>
            <div class="col-xs-12"><h2><?php echo($primera[0]);?></h2></div>
            </header>
            <section>
            <h3>Meaning <span lang="es">Significado</span> <span class="pull-right"><a role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><?php echo($primera[2]);?></a> Answers <span lang="es">Respuestas</span></span></h3>
            <div class="collapse" id="collapseExample1">
              <div class="table-responsive">
                <table class="table">
                <tr>
                  <td><h4><?php echo($primera[3]);?></h4> <p>Correct<br /><span lang="es">Correcto</span></p></td>
                  <td><h4><?php echo($primera[4]);?></h4> <p>Almos correct<br /><span lang="es">Casi correcto</span></p></td>
                  <td><h4><?php echo($primera[5]);?></h4> <p>Doubtful<br /><span lang="es">Dudoso</span></p></td>
                </tr>
                <tr>
                  <td><h4><?php echo($primera[6]);?></h4> <p>Incorrecto<br /><span lang="es">incorrecto</span></p></td>
                  <td><h4><?php echo($primera[7]);?></h4> <p>Opposite<br /><span lang="es">opuesto</span></p></td>
                  <td><h4><?php echo($primera[8]);?></h4> <p>No answer<br /><span lang="es">Sin respuesta</span></p></td>
                </tr>
              </table>
            </div>
          </div><!--collapse-->
            </section>
            <footer>
              <h3>Action <span lang="es">Acción</span></h3>
              <p><?php echo($primera[9]);?></p>
              <p lang="es"><?php echo($primera[10]);?></p>
            </footer>
          </article>
        </div>
        <!--termina tarjeta-->

        <!--comienza la segunda tarjeta-->
        <div class="col-sm-6 col-md-4 suple">
          <article>
            <header class="row">
            <div class="col-xs-6"><img src="<?php echo($segunda[11]);?>" /></div>
            <div class="col-xs-6"><h1><?php echo($segunda[1]);?><span class="porcentaje">%</span></h1><p>Performance <span lang="es">Desempeño</es></p></div>
            <div class="col-xs-12"><h2><?php echo($segunda[0]);?></h2></div>
            </header>
            <section>
            <h3>Meaning <span lang="es">Significado</span> <span class="pull-right"><a role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample"><?php echo($segunda[2]);?></a> Answers <span lang="es">Respuestas</span></span></h3>
            <div class="collapse" id="collapseExample2">
              <div class="table-responsive">
                <table class="table">
                <tr>
                  <td><h4><?php echo($segunda[3]);?></h4> <p>Correct<br /><span lang="es">Correcto</span></p></td>
                  <td><h4><?php echo($segunda[4]);?></h4> <p>Almos correct<br /><span lang="es">Casi correcto</span></p></td>
                  <td><h4><?php echo($segunda[5]);?></h4> <p>Doubtful<br /><span lang="es">Dudoso</span></p></td>
                </tr>
                <tr>
                  <td><h4><?php echo($segunda[6]);?></h4> <p>Incorrecto<br /><span lang="es">incorrecto</span></p></td>
                  <td><h4><?php echo($segunda[7]);?></h4> <p>Opposite<br /><span lang="es">opuesto</span></p></td>
                  <td><h4><?php echo($segunda[8]);?></h4> <p>No answer<br /><span lang="es">Sin respuesta</span></p></td>
                </tr>
              </table>
            </div>
          </div><!--collapse-->
            </section>
            <footer>
              <h3>Action <span lang="es">Acción</span></h3>
              <p><?php echo($segunda[9]);?></p>
              <p lang="es"><?php echo($segunda[10]);?></p>
            </footer>
          </article>
        </div>
        <!--termina tarjeta-->

        <!--comienza la tercera tarjeta-->
        <div class="col-sm-6 col-md-4 suple">
          <article>
            <header class="row">
            <div class="col-xs-6"><img src="<?php echo($tercera[11]);?>" /></div>
            <div class="col-xs-6"><h1><?php echo($tercera[1]);?><span class="porcentaje">%</span></h1><p>Performance <span lang="es">Desempeño</es></p></div>
            <div class="col-xs-12"><h2><?php echo($tercera[0]);?></h2></div>
            </header>
            <section>
            <h3>Meaning <span lang="es">Significado</span> <span class="pull-right"><a role="button" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample"><?php echo($tercera[2]);?></a> Answers <span lang="es">Respuestas</span></span></h3>
            <div class="collapse" id="collapseExample3">
              <div class="table-responsive">
                <table class="table">
                <tr>
                  <td><h4><?php echo($tercera[3]);?></h4> <p>Correct<br /><span lang="es">Correcto</span></p></td>
                  <td><h4><?php echo($tercera[4]);?></h4> <p>Almos correct<br /><span lang="es">Casi correcto</span></p></td>
                  <td><h4><?php echo($tercera[5]);?></h4> <p>Doubtful<br /><span lang="es">Dudoso</span></p></td>
                </tr>
                <tr>
                  <td><h4><?php echo($tercera[6]);?></h4> <p>Incorrecto<br /><span lang="es">incorrecto</span></p></td>
                  <td><h4><?php echo($tercera[7]);?></h4> <p>Opposite<br /><span lang="es">opuesto</span></p></td>
                  <td><h4><?php echo($tercera[8]);?></h4> <p>No answer<br /><span lang="es">Sin respuesta</span></p></td>
                </tr>
              </table>
            </div>
          </div><!--collapse-->
            </section>
            <footer>
              <h3>Action <span lang="es">Acción</span></h3>
              <p><?php echo($tercera[9]);?></p>
              <p lang="es"><?php echo($tercera[10]);?></p>
            </footer>
          </article>
        </div>
        <!--termina tarjeta-->

</div><!--row-->
</div><!--container-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
