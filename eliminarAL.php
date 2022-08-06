<?php
    include "conexionbs.php";


    // Obtener el alumno
    $ID_alumno = $_GET['ID'];
    // Elimina al alumno seleccionado
    $Eliminar = "DELETE FROM alumnos WHERE ID = '$ID_alumno'";

    $resultado= $conn->query($Eliminar);

        if ($resultado == TRUE){
            echo " Alumno eliminado exitosamente";
            header("Location: consultarAL.php");
        }
        else{
            echo "Error" . $Eliminar . "<br>" . $conn->error;
        }

?>