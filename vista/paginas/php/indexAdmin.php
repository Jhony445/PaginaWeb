<?php
session_start();
if(isset($_SESSION["usuarioValido"])){



?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin pagina</title>
  <link rel="icon" href="../../IMG/icon.png">
  <link rel="stylesheet" href="../../css/cssIndex.css">
  <script src="https://kit.fontawesome.com/8fa7958ccd.js" crossorigin="anonymous"></script>
  <script src="vista/vendor/alertifyjs/alertify.js"></script>

  <!-- links --> 
  <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<!--
    RTL version
-->

  <script>
    function mensaje() {
        alertify
            .alert("Bienvenido admin", function () {
            });
    }
</script>
</head>
<body onload="mensaje();">
  <div id="contenedorPrincipal">
    <header id="encabezado">
      <img id="imagentop" src="../../IMG/plp-banner-XBOX-desktop.jpg" width="1232px" height="150px">
    </header>
    <nav id="menu">
      <ul>
        <li><a href="../../vista/paginas/inicio.html" target="iframeGaleria"><i class="fa-solid fa-house"></i>&nbsp; Inicio</a></li>
        <li><a href="../../vista/paginas/Acercade.html" target="iframeGaleria"><i class="fa-solid fa-address-card"></i>&nbsp; Acerca de</a></li>
        <li><a href="../../vista/paginas/game.html" target="iframeGaleria"><i class="fa-solid fa-gamepad"></i>&nbsp; ¡Juega!</a></li>
        <ul class="dropdown" style="float:right"><a href="#" class="dropbtn"><i class="fa-solid fa-user"></i> Perfil</a>
        <li> <div>
          <h4>Bienvenido: 
            <?php
              echo ''.$_SESSION['usuarioValido'];
            ?>
          </h4>
        </div>
        </li>
          <div class="dropdown-content">
            <a href="#">Datos</a>
            <a href="../../vista/paginas/login.html" target="iframeGaleria">Iniciar sesion</a>
            
          </div>
        </ul>
      </ul>
    </nav>
    <section id="contenido">
      <iframe id="iframeGaleria" name="iframeGaleria" src="../../vista/paginas/inicio.html" frameborder="0"></iframe>
    </section>
    <footer id="piePagina">
      <p>
      <p><i class="fa-brands fa-facebook">&nbsp &nbsp<a href="https://www.facebook.com/Jonathan.quistiann">Facebook</a></i></p>
      </p>
      <p>
        <p><i class="fa-solid fa-phone">&nbsp &nbsp5514712961</i></p>
        </p>
    </footer>
  </div>
</body>
</html>

<?php 
}else{
  echo 'Debes inicar sesion';
  echo '<br>';
  echo '
  <a href="../../../index.html">
  inicair sesion
  </a>
  ';
}
?>