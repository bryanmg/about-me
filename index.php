<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv = "content-type" content = "text/html; charset=utf-8"/>
        <title>About Me</title>
        <link rel="stylesheet" href="css/boostrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos-css.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="imagenes/favicon.ico" type='image/x-icon'>
    </head>

    <body> 
      
      <header class="cabecera"><!-- Div para la pestaña superior-->
        <div id="superior">
          <div class="relation-center">
            <h4><a href="">Relacionados</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Desarrollo</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#ancla">Galeria</a></h4>
          </div>  
        </div>
      </header>

      <div class="center">
        <div class="realtion2">
          <br/>
          <img src="imagenes/yo.jpg" alt="Responsive image" class="img-circle center-block circular">
        </div>
        <p><h1>Bryan Mendoza Guerrero</h1></p>
      </div>
      <div class="espacio"><br><br></div>
      <div class="after-box"><!-- segunda pantalla del scroll -->
          
          <div clas="description">
            <div class="text"><h3>Desarrollo personal</h3></div>
              <div class="box"><!-- seccion 1-->
                <img src="imagenes/tkd1.jpg" class="img-circle center-block secundario" id="imagenover">
                <br>
              	<a href=""><p class="text-muted">TAEKWONDO</p></a>
              	<p class="contenido">Practicando este deporte desde Enero de 2013.
                    Grado: Primer Dan. En praparaci&oacute;n para segundo Dan.</p>
              </div>
            
              <div class="box"><!-- seccion 2-->
                <img id="imagenover" src="imagenes/dgre2.jpg" class="img-circle center-block secundario">
                <br>
              	<a href=""><p class="text-muted">ACAD&Eacute;MICO</p></a>
              	<p class="contenido">Cursando cuarto semestre de Ing. en Sistemas Computacionales.
                    En preparaci&oacute;n para la olimpiada matemática organizada interTec's.
                    Mentor de un equipo de 3 ni&ntilde;as en el concurso "TecnovationChallenge".
                    Becario en la DGRE (Direcci&oacute;n General de Recursos Educativos) en la U de C.
                    En proceso de inscripci&oacute;n al programa de investigaci&oacute;n cientifica Delf&iacute;n.
                </p>
              </div>
            	<div class="box"><!-- seccion 3-->
                <img id="imagenover" src="imagenes/social3.jpg" class="img-circle center-block secundario">
                <br>
            		<a href=""><p class="text-muted">SOCIAL</p></a>
            		<p class="contenido">¿Esperas que tenga vida social despues de todo eso? ¿Que me crees?.
                  (No tengo amigos).</p>
            	</div>
              <div class="box"><!-- seccion 4-->
                <img id="imagenover" src="imagenes/work.jpg" class="img-circle center-block secundario">
                <br>
                <a href=""><p class="text-muted">EL WORK</p></a>
                <p class="contenido">
                  En cuanto a trabajo no hay mucho que decir...
                  Me gusta cosinar y preparar vebidas.
                  tengo una fijacion severa por los pandas :)
                </p>
              </div>
          </div>
      </div>

      <div> <!-- seccion con ancla-->
        <a name="ancla" id="a"></a>
        <div class="description">
        <?=
          $limit=8;
          //echo "<img id='' src='imagenes/galeria".$con.".jpg' class='galery'>";
          for($con = 1; $con <= $limit; $con++){
            ?><img id='' src='imagenes/galeria"<?=$con?>".jpg' class='galery'>
            <?=
          }
        ?>
        </div>
      </div>
     
    <div id="pie">
      <div class="relation">
        <h5>P&aacute;gina Desarrollada por Bryan, alias El Negro :)</h5>
      </div>
    </div>
        
        <!-- Los javascripts BACKGROUND="imagenes/1.jpeg" class="img-responsive"-->
        <script type="text/javascript" src="js/boostrap.min.js"></script>
        <script type="text/javascript" src="js/boostrap.js"></script>
        <script type="text/javascript" src="jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="estilos-js.js"></script>
    </body>
</html>
