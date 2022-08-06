<?php
    include "conexionbs.php";


    
    $ID_prof = $_GET['ID'];
    
    $Eliminar = "DELETE FROM profesores WHERE ID = '$ID_prof'";

    $resultado= $conn->query($Eliminar);

        if ($resultado == TRUE){
            echo " Profesor eliminado exitosamente";
            header("Location: consultarPROF.php");
        }
        else{
            echo "Error" . $Eliminar . "<br>" . $conn->error;
        }

?>