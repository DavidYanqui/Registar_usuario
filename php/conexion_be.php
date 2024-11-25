<?php

$servidor = 'localhost';    // Servidor MySQL (localhost para XAMPP)
$usuario = 'root';          // Usuario de MySQL (por defecto 'root' en XAMPP)
$contraseña = '';           // Deja vacío si no tienes contraseña configurada
$base_de_datos = 'db_login_registrarse';  // Nombre de la base de datos

// Intentar la conexión
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);

// Verificar la conexión
if ($conexion) {
    echo 'Conectado exitosamente a la Base de Datos';
} else {
    // Si la conexión falla, mostrar el error
    echo 'No se ha podido conectar a la Base de Datos: ' . mysqli_connect_error();
}
?>