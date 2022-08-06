
<?php //abriendo codigo php
// Declaracion de variables $nombredevariable = 255; 
// Declaracion de las variables para la conexion de la BD
// Variable del servidor
$localhost = "localhost:3307";
// Variable del usuario
$nombreusuario = "root";
// Variable de contraseña
$password = "";
// Variable BD
$namebd = "coffeeuni";

//Obtener informacion declarada anteriormente usand la funcion msqi_connect para conectarns a la base de datos
$conn = mysqli_connect($localhost, $nombreusuario, $password);
$db = mysqli_select_db($conn, $namebd);

// echo es para imprimir

// Checar conexion
if ($conn-> connect_errno){
    die("La conexión es fallida". $conn-> connect_error());
    exit();
}else{
    echo "La conexion fue exitosa";
}

// cerrando php
?>
