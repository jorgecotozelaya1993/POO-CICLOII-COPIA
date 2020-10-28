<?php
    require_once '../dao/Roles.dao.php';
    $rol = RolesDAO::buscarPorId($_GET['id'])
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar DatoL</title>
</head>
<body>
    
<h1>Roles</h1>
<h2>editar</h2>
<form action="../controladores/Roles.controlador.php?a=edit" method="POST">
<input type="hidden" name="id" placeholder="Identificardor" required value="<?php echo $rol[0]; ?>" readonly='true'>

    <input type="text" name="nombre" placeholder="Nombre" required value="<?php echo $rol[1]; ?>">
    <input type="submit" value="Actualizar Datos">

</form>

</body>
</html>