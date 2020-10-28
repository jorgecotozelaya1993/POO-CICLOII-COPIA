<form action="guardar_alumno.php" method="post">
                            <div class="form-group">
                                <label>Nombre Completo</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Jorge Alberto Coto" require>
                            </div>

                            <div class="form-group">
                                <label>Fecha de Nacimiento</label>
                                <input type="date" name="fecha" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Direccion</label>
                                <textarea class="form-control" name="direccion" rows="2" required  placeholder="Direccion del Estudiante"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Genero</label>
                                <input type="radio" name="genero" value="M">  Masculino
                                <input type="radio" name="genero" value="F">  Femenino<br>
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="tel" name="telefono" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="email" name="email" class="form-control"  placeholder="carlos@gmail.com" required>
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

    <input type="submit" class="btn btn-success btn-block" value="Registrar Estudiante" name="registrar">

                        </form>