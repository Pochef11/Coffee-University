<?php
    require "conexionbs.php";
    $Consultar = "SELECT * FROM profesores";
    $resultado = $conn->query($Consultar);

?>
    <!doctype html>
    <html lang="en">
      <head>
        <title>Consultar maestros</title>
        <link rel="icon" href="logo taza.webp">
        <link rel="stylesheet" href="consultarAL.css">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
          
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                
        
                <div class="container-fluid">
                <div class="row">
                <div class="col-6">
                    <div class="Bloque1">
                        <img src="icon.png" alt="" width="200" height="200">
                        <pre class="PRE"><Strong>COFFEE
University</Strong>
                        </pre>
                    </div>
            
                </div>
                <div class="col-6">
                    <div class="Menu text-center">
                              
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                        <img src="logo menu.png" alt="" width="80px" height="80px">
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.html">Home</a>
                        <a class="dropdown-item" href="acercade.html">Acerca de</a>
                        <a class="dropdown-item" href="oferta.html">Oferta</a>
                        <a class="dropdown-item" href="servicios.html">Servicios</a>
                        <br>
                        <a class="dropdown-item" href="login.html">Inicio de sesion</a>
                        <a class="dropdown-item" href="perfil.html">Perfil</a>
                        <a class="dropdown-item" href="cerrarsesion.php">Cerrar sesion</a>
                        <br>
                        <a class="dropdown-item" href="servicios.html">Alumnos</a>
                        <a class="dropdown-item" href="profesores.html">Profesores</a>
                        <a class="dropdown-item" href="administracion.html">Adminsitrativos</a>
                        <br>
                        <a class="dropdown-item" href ="consultarAL.php">Consulta Alumnos</a>
                        <a class="dropdown-item" href ="consultarPROF.php">Consulta Profesores</a>
                        <a class="dropdown-item" href ="consultarAD.php">C. Administrativos</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <table class="table mt-5">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Sueldo</th>
                                    <th scope="col">Materia impartida</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if ($resultado->num_rows>0){
                                        while ($row = $resultado->fetch_assoc()){
                                ?>

                                <tr class="text-center">
                                    <td><?php echo $row ['ID']?></td>
                                    <td><?php echo $row ['nombre']?></td>
                                    <td><?php echo $row ['sueldo']?></td>
                                    <td><?php echo $row ['materia']?></td>
                                    <td><a class="btn btn-info" href="modificarPROF.php?ID=<?php echo $row['ID'];?>">
                                    Modificar</a>&nbsp;<a class="btn btn-danger" href="eliminarPROF.php?ID=<?php echo $row['ID'];?>">Eliminar</a></td>
                                </tr>

                                    <?php
                                        }
                                        }
                                    ?>
                            
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>


        </body>
    </html>