<form method="POST" action="index.php">
<div class="form-group">
        <label for="">Mostrar Estudiante por Carrera: </label>    
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

    <input type="submit" class="btn btn-success btn-block" value="Mostrar Estudiante" name="mostrar"><br>



    <?php 
        if(isset($_POST['mostrar'])){
        $carrera = $_POST['carrera'];
    ?>

                    <table id="example" class="table table-striped table-bordered" style="width:100%">

                    <thead>
                        <tr>
                    <th>Nombre</th>
                    <th>Carnet</th>
                    <th>Telefono</th>
                    <th>Fecha Matricula</th> 
                    <th>Email</th>
                    <th>Opciones</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM alumnos WHERE carrera='$carrera'";
                            $resultado_tabla = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($resultado_tabla)){
                        ?>
                        <tr>
                            <td><?php echo $row['nombre_completo']; ?></td>
                            <td><?php echo $row['carnet']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td><?php echo $row['fecha_matricula']; ?></td>
                            <td><?php echo $row['correo']; ?></td>
                            

                            <td>

                            <a href="editar_alumno.php?idalumno=<?php echo $row['idalumno'];?>" class="btn btn-secondary">
                                Editar
                                </a>
                              <a href="eliminar_alumno.php?idalumno=<?php echo $row['idalumno'];?>" class="btn btn-danger">
                                Eliminar
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>


                    </table>
    <?php  } ?>
</form>