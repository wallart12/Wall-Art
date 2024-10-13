
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="../css/perfil.css">
    
</head>
<body>
    <header>
        <div class="content">
            <div class="menu container">
                <a href="#" class="logo">WALL ART</a>
                 <nav class="navbar">
                    <ul>
                        <a  href="inicio.html">INICIO</a>
                        <a  href="quienes somos.html">QUIENES SOMOS</a>
                        <a  href="nusetros servicios.html">NUESTRO SERVICIO</a>
                        <a  href="Galeria.html">GALERIA</a>
                        <a  href="aprende.html">APRENDE</a>
                        <a  href="eleccion.html">REGISTRO</a>
                        <a  href="perfil.php">PERFIL</a>
                    </ul>  
                </nav>
            </div>
        </div>               
     </header>

<div id="perfil">
    <h2>TU PERFIL</h2>
    <img id="fotoPerfil" name="Imagen" src="" alt="Foto de perfil" style="max-width: 150px;"/><br/>
    <strong name="Nombre">Nombre:</strong> <span id="nombrePerfil"></span><br/>
    <strong name="Email">correo</strong> <span id="tipoPerfil"></span><br/>
    <strong name="des">Descripción:</strong> <span id="descripcionPerfil"></span><br/>
</div>
<form action="insertar2.php" method="POST" id="formulario">
    <h1>MODIFICA TU PERFIL</h1>
    <h3>Nombre</h3>
    <BR>
    <input type="text" name="Nombre" id="nombre">

    <h3>Diseñador o Empresa</h3>
    <br>
   

   <h3>CAMBIA TU FOTO DE PERFIL</h3>
    <input type="file" id="foto" name="Imagen" id accept="image/*" required class="foto"><br><br>

   <h3>Descripción</h3>
    <textarea id="descripcion" name="Descripcion" id required class="textarea"></textarea><br><br>

    <input type="submit" id="button" value="Modificar Perfil">
</form>


<script> 
document.getElementById('formulario').addEventListener('submit', function(event) {
    event.preventDefault(); 
    const nombre = document.getElementById('nombre').value;
    const tipo = document.getElementById('tipo').value;
    const foto = document.getElementById('foto').files[0];
    const fotoURL = URL.createObjectURL(foto);
    const descripcion = document.getElementById('descripcion').value;
    document.getElementById('nombrePerfil').textContent = nombre;
    document.getElementById('tipoPerfil').textContent = tipo;
    document.getElementById('fotoPerfil').src = fotoURL;
    document.getElementById('descripcionPerfil').textContent = descripcion;  
    }, 5000);
    document.getElementById('perfil').style.display = 'block';
;
</script>

</body>
</html>