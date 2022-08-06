<?php

include "conexionbs.php";


    session_start();

        $nombreAdministracion = $_POST['txt_nombreAD'];
        $sueldoAdministracion = $_POST['txt_sueldoAD'];
        $areaAdministracion= $_POST['txt_area'];

        $insersion_AD = "INSERT INTO administracion (nombre, sueldo, area)
                    values ('$nombreAdministracion', '$sueldoAdministracion', '$areaAdministracion' )";

        $resultado= $conn->query($insersion_AD);

        if ($resultado == TRUE){
            echo "Administrador agregado exitosamente";
            header("Location: consultarAD.php");
        }
        else{
            echo "Error" . $insersion_AD . "<br>" . $conn->error;
        }
        
        // Cerrar la conexion
        $conn->close();

?>