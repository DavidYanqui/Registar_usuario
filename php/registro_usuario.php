<?php

include 'DBconexion.php';
   
    
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
// $contrasena = hash('sha512', $contrasena);


$query = "INSERT INTO usuario(nombre_completo, correo, usuario, contrasena) 
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

// Verificar que el correo no se repita el correo debe ser unico para iniciar sesion 

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
        <script>
            alert("Este correo ya existe, ingresa otro correo");
                 window.location = "../index.php";
        </script>
    ';
    exit();
}


// Verificar que el nombre de usuario no se repita en la base de datos 

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
        <script>
            alert("Este usuario ya se encuentra registrado, ingresa otro usuario");
                 window.location = "../index.php";
        </script>
    ';
    exit();
}


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Usuario Registrado exitosamente");
                   window.location = "../index.php";
        </script>
    '; 
} else{
     echo '
        <script>
            alert("Intentelo de nuevo usuario no guardado");
                   window.location = "../index.php";
        </script>
    ';
}
mysqli_close($conexion);

?>