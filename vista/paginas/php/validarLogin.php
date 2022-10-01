<?php
echo "Bienvenido a PHP ";

$nombreUsuario;
$claveUsuario;

$nombreUsuario=$_REQUEST['txtUsuario'];
$claveUsuario=$_REQUEST['txtContrasena'];

if($nombreUsuario=="jonathan" && $claveUsuario=="1234") {
    session_start();
    $_SESSION['usuarioValido']=$nombreUsuario;
    echo "Bienvenido " . $nombreUsuario;
    echo '
    <script>
    window.location.href="indexAdmin.php"
    </script>
    ';
}
else{
    echo "Usuario y/o contraseña incorrecta";
}
?>