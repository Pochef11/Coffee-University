<?php
        include("conexionbs.php");
    
        $id=$_POST['id'];
        $nombre=$_POST['nombreAL'];
        $promedio=$_POST['promedioAL'];
        $carrera=$_POST['carreraAL'];
        
    
        $sql="UPDATE alumnos SET 
        nombre ='$nombre',
        promedio='$promedio',
        carreta='$carrera' where 
        ID ='$id'";
        $query=mysqli_query($conn,$sql);
        
        header("location: consultarAL.php");

?>