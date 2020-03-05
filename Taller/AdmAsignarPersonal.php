<?php
    /*session_start();
    if(!isset($_SESSION['autenticado'])){
        header("location: Login.php?status=500");
    }
    include("../Conexion/cn.php");*/
    include('../Layout/estilos.php');
    include('../Layout/scripts.php');
    include('../Layout/header.php');
    include('../Layout/menu.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente</title>
</head>

<body>
<div class="container">    
        <table class="table table-hover table table-bordered" style="margin:1rem;">
            <thead>
                <tr class="thead-dark">
                    <th scope="col"> ID </th>
                    <th scope="col"> Nombre </th>
                    <th scope="col"> boton Asignar </th>
                </tr>
            </thead>
            <tbody>

                <?php /*
            $cmd ="select * from Alumnos";
            $resultado = $conexion ->query($cmd); 
            while($row=$resultado->fetch_array(MYSQLI_ASSOC)){  ?>
                <tr scope="row">
                    <td> <?php echo $row['Id']; ?> </td>
                    <td> <?php echo $row['Nombre']; ?> </td>
                    <td><a href="Administrador.php?Id=<?php echo $row['Id']; ?>" class="btn btn-success btn-md btn-block">Actualizar</a></td>
                </tr>
                <?php
                }
                 */?>
            </tbody>
        </table>
    </div>
</body>
</html>