<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>registro diseñador</title>
  <link rel="stylesheet" href="../css/registro1.css">
  
</head>
<body>

  <div class="reg">
  <div class="registro1">
    <form action="intermediario1.php" method="POST" class="registro1">
    <h1 class="titulo">Registro</h1>
    <input type="text"  id="text" placeholder="Nombre" name="Nombre" class="n" required>
     <input type="email" id="text" placeholder="Correo" name="Correo" class="correo">

     <input type="file" id="foto" name="Imagen" id accept="image/*" required class="foto" class="correo">
     
    <label for="" class="l">Fecha de nacimiento</label>
    <br>
    <input type="datetime-local" name="fecha" id="f"class="fecha">
    <input type="edad" name="edad" id="edad" placeholder="edad" class="contenido">
    <h3 class="sub">Tipo de tarjeta de identidad</h3>
    <div name="TI">
     <h3><input type="radio" name="radio" id="opcion" class="radio" >C.C</h3>
    
    <h3><input type="radio"name="radio" id="opcion1" class="radio">T.I</h3>

    <h3><input type="radio" name="radio" id="opcion2" class="radio" >PPT</h3>
    </div>
   <input type="numer"id="numer"name="Nit" placeholder="Numero de identidad"class="n-id">

    
    
    <input type="password"id="password"name="Contraseña"placeholder="Contraseña"class="contra">
    
    <input type="password"id="password"name="Confirmar"placeholder="Confirmar"class="comf">
    

    <textarea name="des" class="comf" cols="30" rows="10">agrega una descripcion</textarea>
    <a href="eleccion.html"><button type="button" class="b">Volver</button></a>
  
  <p  class="p">¿Ya tienes una cuenta?<a href="inicio de sesion.php">  Iniciar sesión</a></p>
   <p>Aquí se muestran los terminos y condiciones<a href="terminos.html"> Terminos y condiciones</a></p>
   <div class="container">
   <label>Aceptar terminos y condiciones</label>
   <input type="checkbox"name="radio" id="opcion" class="opcion">
   </div>
   <input type="submit" value="crear cuenta" class="boton-primario">
  </form>
  </div>
</div>
</body>
</html>
