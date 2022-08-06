<?php

include "conexionbs.php";

    session_start();

        $nombrePROF = $_POST['txt_nombreP'];
        $sueldoPROF = $_POST['txt_sueldoP'];
        $materia= $_POST['txt_materia'];

        $insercion_profesores = 
            "INSERT INTO profesores (nombre, sueldo, materia)
                    values ('$nombrePROF', '$sueldoPROF', '$materia' )";

        $resultado= $conn->query($insercion_profesores);

        if ($resultado == TRUE){
            echo "Profesor agregado exitosamente";
            header("Location: consultarPROF.php");
        }
        else{
            echo "Error" . $insercion_profesores . "<br>" . $conn->error;
        }
        
        // Cerrar la conexion
        $conn->close();

?>