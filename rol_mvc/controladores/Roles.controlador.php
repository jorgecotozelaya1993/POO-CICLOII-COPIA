<?php 
require_once '../dao/Roles.dao.php';
require_once '../modelos/Rol.clase.php';

    switch ($_GET['a']){
    case 'ingr':
        $r = new Rol();
        $r->nombre = $_POST['nombre'];
        RolesDAO::ingresarDato($r);
    break;

    case 'edit':
    $r = new Rol();
    $r->id = $_POST['id'];
    $r->nombre = $_POST['nombre'];
    RolesDAO::editarDato($r);
    break;

    case 'elim':
        RolesDAO::eliminarPorId($_GET['id']);

    }

    header("Location: ../roles/index.php");
?>