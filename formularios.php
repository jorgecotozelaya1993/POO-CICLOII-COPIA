<!DOCTYPE HTML>
<html lang="es-ES">
 <head>
  <meta charset="utf-8" />
  <title>Etiquetas HTML5: Crear formularios</title>
 </head>
 <body>
<h1>Etiquetas HTML5: Crear formularios</h1>
<h2>Formularios</h2>
<form action="formularios.php" method="get" autocomplete>

<h3>texto</h3>
<label form="nombre">Nombre:</label>
<input name="nombre" type="text" value="" readonly disabled size="40" maxlength="10" pattern="[A-Za-z]{3}" 
placeholder="Primer Nombre">

<h3>radio</h3>
<input type="radio" name="genero" value="Masculino" checked> Masculino
<br>
<input type="radio" name="genero" value="Femenino"> Femenino
<br>
<input type="radio" name="genero" value="otros"> Otros

<h3>Select</h3>
<label form="mes">genero:</label>
<select name="mes">
<option value="Masculino">Masculino</option>
<option value="Femenino">Femenino</option>
<option value="Otro">Otro</option>
</select>

<h3>textarea</h3>
<textarea name="mensaje" rows="10" cols="30">
En esta parte puedes escribir tu mensaje
</textarea>

<h3>datalist</h3>
<label form="nombre">Buscador:</label>
<input list="browsers">
<datalist id="browsers">
 <option value="Internet Explorer">
 <option value="Firefox">
 <option value="Chrome">
 <option value="Opera">
 <option value="Safari">
</datalist> 

<h3>password</h3>
<label form="password">Clave:</label>
<input type="password" name="clave" required> 

<h3>checkbox</h3>
<input type="checkbox" name="vehiculo1" value="Bicicleta"> Tengo una bicicleta<br>
<input type="checkbox" name="vehiculo2" value="Carro"> tengo un carro

<h3>Color</h3>
<label form="color">Color:</label>
<input type="color" name="favotitocolor">

<h3>Fecha</h3>
<label form="date">Fecha:</label>
<input type="date" name="fecha" min="2020-05-13">

<h3>datetime</h3>
<label form="datetime-">datetime:</label>
<input type="datetime-local" name="fecha_hora">

<h3>email</h3>
<label form="email">email:</label>
<input type="email" name="email" autocomplete="off">

<h3>number</h3>
<label form="number">numero:</label>
<input type="number" name="numero" min="1" max="25" step="2">

<h3>points</h3>
<label form="points">numero desde y hasta:</label>
<input type="number" name="points" min="0" max="100" step="10" value="30">

<h3>range</h3>
<label form="range">rango:</label>
<input type="range" name="rango" min="0" max="10">

<h3>search</h3>
<label form="search">Busqueda:</label>
<input type="search" name="busquedagoogle">	

<h3>time</h3>
<label form="time">Hora:</label>
<input type="time" name="hora_tiempo">

<h3>url</h3>
<label form="url">url:</label>
<input type="url" name="url">

<h3>week</h3>
<label form="week">semana año:</label>
<input type="week" name="semana_año">

<h3>file</h3>
<label form="fichero">ficheros:</label>
<input type="file" name="img" multiple>
<br><br>

<input type="submit" value="Enviar">

</form>
</body>
</html>