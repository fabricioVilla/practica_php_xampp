<?php

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    header("Location: vistas/lista_usuarios.php");
}else{
    //echo "login";
    header("Location: vistas/login.php");
}


?>