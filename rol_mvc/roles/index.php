<?php require_once '../dao/Roles.dao.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC ROLES</title>
</head>
<body>
    

    <h1>Roles</h1>
    <h2>Listar</h2>

    <a href="ingresar.php">Ingresar nuevo rol</a><br><br>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th colspan="2">Opciones</th>
        </tr>


        <?php foreach(RolesDAO::listarDatos() as $filas):?>
            <tr>
                <td><?= $filas['1']; ?></td>
                <td>
            <a href="editar.php?id=<?php echo $filas['0']; ?>"">Editar</a>
            <a href="../controladores/Roles.controlador.php?a=elim&id=<?php echo $filas['0']; ?>" 
            onclick="return confirm('Deseas eliminar el dato de la base de datos')">Eliminar</a>

            </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>