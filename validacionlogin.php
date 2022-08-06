<?php
    //Indicar la conexion de la pagina conexionbs.php
    include "conexionbs.php";
    // Para comenzar una sesion, parecido al function de php
    session_start();

    // Mandar a llamar los inputs y el boton del formulario de la pagina de login y guardando los datos que se hayan puesto en ellos
    $usuario = $_POST ["txt_Matricula"];
    $pass = $_POST["txt_Password"];

    $validad_login = mysqli_query($conn,"SELECT * FROM usuarios WHERE Matricula = '$usuario' 
                                AND Contra = '$pass'");
    

    // Condicion para acceder a la pagina, d elo contrario mostrara un mensaje
    if(mysqli_num_rows($validad_login)>0){
        header("Location: index.html");
    }
    else {
        
        echo '<script type="text/javascript">
        alert("Usuario no encontrado");
        header("Location: login.html");
        </script>';
        
    }

?>
