<?php
    require_once('Model/Conexion.php');
    $con = new Conexion();
    $usuarios =  $con->getUsuarios();

    require('Views/V_verUsuarios.php');
?>