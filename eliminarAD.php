<?php
    include "conexionbs.php";


    // Obtener el alumno
    $ID_admin = $_GET['ID'];
    // Elimina al alumno seleccionado
    $Eliminar = "DELETE FROM administracion WHERE ID = '$ID_admin'";

    $resultado= $conn->query($Eliminar);

        if ($resultado == TRUE){
            echo " Administrativo eliminado exitosamente";
            header("Location: consultarAD.php");
        }
        else{
            echo "Error" . $Eliminar . "<br>" . $conn->error;
        }

?>