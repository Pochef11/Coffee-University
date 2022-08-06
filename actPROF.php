<?php
        include("conexionbs.php");
    
        $idp=$_POST['idp'];
        $nombre=$_POST['profe'];
        $sueldo=$_POST['sueldoP'];
        $materia=$_POST['materia'];
        
    
        $sql="UPDATE profesores SET 
        nombre ='$nombre',
        sueldo='$sueldo',
        materia='$materia' where 
        ID ='$idp'";
        $query=mysqli_query($conn,$sql);
        
        header("location: consultarPROF.php");

?>