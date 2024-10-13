<?php
// Incluye la conexión y la función insertar
require_once 'conexiion.php';
require_once 'insertar1.php';

function enviar_datos_a_perfil() {
    // Recupera los datos del formulario
    $Nombre = $_POST['Nombre'];
    $Email = $_POST['Email'];
    $des = $_POST['des'];
    $Imagen=$_POST['Imagen']
    // ... (recupera los demás campos del formulario)

    // Inserta los datos en la base de datos
    $insertar->insertar_usuario($Nombre, $Email, $des, /* ... */);

    // Envía los datos a perfil.php
    $url = 'perfil.php';
    $data = http_build_query(array(
        'Nombre' => $Nombre,
        'Email' => $Email,
        'des' => $des,
        'Imagen' => $Imagen,
        // ... (envía los demás campos del formulario)
    ));

    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => $data
        )
    );

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // Verifica si se envió correctamente
    if ($result === false) {
        die("Error al enviar datos a perfil.php");
    }

    echo "Datos enviados correctamente a perfil.php";
    header('Location: perfil.php'); // Redirige a perfil.php
    exit;
}
?>