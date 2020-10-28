<?php 
include("db.php");

if(isset($_POST['registrar'])){
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $direccion = $_POST['direccion'];
    $genero = $_POST['genero'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $carnet_clave = substr(md5(microtime()),1, 8);
    $carrera = $_POST['carrera'];

$query = "INSERT INTO alumnos(nombre_completo,fecha_nacimiento,direccion,genero,telefono,correo,carnet,clave,carrera)
VALUES('$nombre','$fecha','$direccion','$genero','$telefono','$email','$carnet_clave','$carnet_clave','$carrera')";
$resultado = mysqli_query($conn,$query);

if(!$resultado){
    die("Error al guardar");
}else{
   $_SESSION['mensaje'] = "Estudiante Registrado en Nuestra Universidad";
   $_SESSION['mensaje_tipo'] = "success";
   header("Location: index.php");
}
}
?>