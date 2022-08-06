<?php
        include("conexionbs.php");
    
        $idAD=$_POST['idAD'];
        $nombreAD=$_POST['admin'];
        $sueldoAD=$_POST['sueldoA'];
        $area=$_POST['area'];
        
    
        $sql="UPDATE administracion SET 
        nombre ='$nombreAD',
        sueldo='$sueldoAD',
        area='$area' where 
        ID ='$idAD'";
        $query=mysqli_query($conn,$sql);
        
        header("location: consultarAD.php");

?>