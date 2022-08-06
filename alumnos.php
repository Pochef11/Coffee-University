<?php
    include "conexionbs.php";
    session_start();

        $nombrealumno = $_POST['txt_nombre'];
        $promedio = $_POST['txt_promedio'];
        $carrera= $_POST['txt_carrera'];

        $insercion_alumnos = 
            "INSERT INTO alumnos (nombre, promedio, carreta)
                    values ('$nombrealumno', '$promedio', '$carrera' )";

        $resultado= $conn->query($insercion_alumnos);

        if ($resultado == TRUE){
            echo "Alumno agregado exitosamente";
            header("Location: consultarAL.php");
        }
        else{
            echo "Error" . $insercion_alumnos . "<br>" . $conn->error;
        }
        
        // Cerrar la conexion
        $conn->close();
?>
