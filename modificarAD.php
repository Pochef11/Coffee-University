<?php
    include "conexionbs.php";

    
    $ID = $_GET['ID'];
    $sql = "SELECT * FROM administracion WHERE ID ='$ID'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
    
  
?>
    <!doctype html>
    <html lang="en">
      <head>
        <title>Mod. Administrativos</title>
        <link rel="stylesheet" href="../css/alumnos.css">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <div class="Bloque1">
                <img src="../img/icon.png" alt="" width="200" height="200">
                <pre class="PRE"><Strong>COFFEE
University</Strong>
                </pre>
            </div>
          </div>
        </div>
    </div>



   <hr> 

    <div class="container-fluid">
        <div class="col-12 text-center">
          <h1>Modificar administrativos</h1>
          <br>
            <form class="form-group" action="actAD.php" method="POST">
                <input type="hidden"name="idAD" value="<?php echo $row['ID']?>">
                <label for="">Nombre:</label>
                            <input type="text" name="admin" placeholder="Nombre CORRECCION" value="<?php echo $row['nombre']?>">
                <br><br>
                <label for="">Promedio:</label>
                            <input type="text" name="sueldoA" placeholder="Sueldo NUEVO" value="<?php echo $row['sueldo']?>">
                <br><br>
                <label for="">Carrera:</label>
                            <input type="text" name="area" placeholder="Traspaso" value="<?php echo $row['area']?>">
                <br><br>
                <button type="submit" class="btn btn-primary"  ><Strong>Finalizar</Strong></button>

                


            </form>
        </div>
    </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
    </html>