<?php
    include ("db.php");

    if(isset($_GET['idalumno'])){
        $idalumno = $_GET['idalumno'];
        $query = "DELETE FROM alumnos WHERE idalumno =  $idalumno";
        $resultado = mysqli_query($conn,$query);
        if(!$resultado){
            die("Error al eliminar este registro de nuestra BD");
        }else{
            $_SESSION['mensaje'] = "Estudiante/a Eliminado de nuestra BD";
             $_SESSION['mensaje_tipo'] = "danger";
            header("Location: index.php");
        }

    }
?>