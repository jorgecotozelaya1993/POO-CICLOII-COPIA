<?php include("db.php"); 


if  (isset($_GET['idalumno'])) {
    $idalumno = $_GET['idalumno'];
    $query = "SELECT * FROM alumnos WHERE idalumno=$idalumno";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $nombre_completo = $row['nombre_completo'];
      $fecha_nacimiento = $row['fecha_nacimiento'];
      $direccion = $row['direccion'];
      $telefono = $row['telefono'];
      $correo = $row['correo'];
      
    }
  }

  if(isset($_POST['actualizar'])){
    $idalumno = $_GET['idalumno'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $carrera = $_POST['carrera'];

$query = "UPDATE alumnos set nombre_completo = '$nombre', fecha_nacimiento = '$fecha', direccion = '$direccion', telefono = '$telefono', correo = '$email', carrera = '$carrera' WHERE idalumno=$idalumno";
mysqli_query($conn,$query);
    $_SESSION['mensaje'] = "Datos Actualizados Correctamente";
   $_SESSION['mensaje_tipo'] = "warning";
   header("Location: index.php");
  }

?>

<?php include("includes/header.php"); ?>


<div class="container">

<div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card card-body">
                <!--FORMULARIO DE ACTUALIZAR DATOS-->


                <form action="editar_alumno.php?idalumno=<?php echo $_GET['idalumno']; ?>" method="post">
                            <div class="form-group">
                                <label>Nombre Completo</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Jorge Alberto Coto" required value="<?php echo $nombre_completo; ?>">
                            </div>

                            <div class="form-group">
                                <label>Fecha de Nacimiento</label>
                                <input type="date" name="fecha" class="form-control" required value="<?php echo $fecha_nacimiento; ?>">
                            </div>
                            <div class="form-group">
                                <label>Direccion</label>
                                <textarea class="form-control" name="direccion" rows="2" required >
                                <?php echo $direccion; ?>   
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="tel" name="telefono" class="form-control" required value="<?php echo $telefono; ?>">
                            </div>
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="email" name="email" class="form-control"  placeholder="carlos@gmail.com" required value="<?php echo $correo; ?>">
                            </div>

                            
                            <div class="form-group">
        <label for="">Carrera a Matricularse: </label>    
        <select name="carrera" class="form-control">
        <option selected>-Seleccione una Carrera-</option>
            <optgroup label="Facultad de Ciencias del Hombre y la Naturaleza">
                <option value="Técnico en Ingeniería Agroecológica">Técnico en Ingeniería Agroecológica</option>
                <option value="Técnico en Desarrollo de Aplicaciones Informáticas">Técnico en Desarrollo de Aplicaciones Informáticas</option>
                <option value="Ingeniería Agroecológica">Ingeniería Agroecológica</option>
                <option value="Licenciatura en Ciencias Jurídicas">Licenciatura en Ciencias Jurídicas</option>
                <option value="Licenciatura en Contaduría Pública">Licenciatura en Contaduría Pública</option>
                <option value="Licenciatura en Administración de Empresas">Licenciatura en Administración de Empresas</option>
                <option value="Licenciatura en Ciencias de la Computación">Licenciatura en Ciencias de la Computación</option>
            </optgroup>
            <optgroup label="Facultad de Teología y Humanidades">
                <option value="Licenciatura en Trabajo Social">Licenciatura en Trabajo Social</option>
                <option value="Licenciatura en Teología">Licenciatura en Teología</option>
            </optgroup>
</select>
    </div>

    <input type="submit" class="btn btn-success btn-block" value="Actualizar Datos del Estudiante" name="actualizar">

                        </form>

            </div>
        </div>
</div>
</div>

<?php include("includes/footer.php"); ?>