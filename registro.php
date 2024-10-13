<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>registro empresa</title>
  <link rel="stylesheet" href="../css/registro.css">
  
</head>
<body>

  <div
  class="reg">
  <div >
    <form action="intermediario.php" method="POST" class="registro1">
    <h1 class="titulo">Registro</h1>
    <input type="text"id="text" placeholder="Nombre de la empresa"class="nombre-e" name="Nombre">

     <input type="gmail"id="text" placeholder="Correo" name="Correo" class="correo">

     <input type="file" id="foto" name="Imagen" id accept="image/*" required class="foto" class="correo" >

   <input type="numer"id="numer"name="NIF" placeholder="Numero de identidad fiscal"class="n-id">

   <label for=""class="cc">Fecha de creación de la empresa.</label>
   <br>
   <input type="datetime-local"id="fecha" name="Fecha" class="fechas">

  
    
    <input type="password"id="password"name="Contrasena"placeholder="Contraseña"class="contra">
    
    <input type="password"id="password"name="Confirmar"placeholder="Confirmar"class="comf">
    
    <textarea name="des" class="comf" cols="30" rows="10">agrega una descripcion</textarea>
    <a href="eleccion.html">
      
    <button type="button" class="botton">Volver</button></a>
    
  <p  class="p"> ¿Ya tienes una cuenta? <br> <a href="inicio de sesion.php"> Iniciar sesión </a></p>
   <p>Aquí se muestran los terminos y condiciones<a href="terminos.html"> Terminos y condiciones</a></p>
   <div class="container">
   <label>Aceptar terminos y condiciones</label>
   <input type="checkbox"name="radio" id="opcion" class="opcion">
   </div>
  
 <input type="submit" value="Crear cuenta" class="boton-primario" >
   </form>
  </div>
</div>

</body>
<script>
  const formulario = document.getElementById('form');
  
  formulario.addEventListener('submit', (e) => {
    const nombre = document.getElementById('text').value;
    const correo = document.getElementById('fecha').value;
    const fecha = document.getElementById('numer').value;
    const contrasen1 = document.getElementById('password').value;
    const opciom= document.getElementById('opcion').value;
   
    
    if (nombre === '' || apellido === '' || email === '' || telefono === '' || mensaje === '') {
      e.preventDefault();
      alert('Por favor, complete todos los campos del formulario');
    }
  });
  </script>

</html>
