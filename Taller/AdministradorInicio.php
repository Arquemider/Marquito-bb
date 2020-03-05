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
        <form>
        <table class="table table-hover table table-bordered" style="margin:1rem;">
            <thead>
                <tr class="thead-dark">
                    <th scope="col"> ID Carro </th>
                    <th scope="col"> Marca </th>
                    <th scope="col"> Modelo </th>
                    <th scope="col"> Color </th>
                    <th scope="col"> Estatus</th>
                    <th scope="col"> Fecha Ingreso</th>
                    <th scope="col"> Asignar personal</th>
                    <th scope="col"> Ver Detalles</th>
                </tr>
            </thead>
            <tbody>

                <?php /*
            $cmd ="select * from Alumnos";
            $resultado = $conexion ->query($cmd); 
            while($row=$resultado->fetch_array(MYSQLI_ASSOC)){  ?>
                <tr scope="row">
                    <td> <?php echo $row['Id']; ?> </td>
                    <td> <?php echo $row['Marca']; ?> </td>
                    <td> <?php echo $row['Modelo']; ?> </td>
                    <td> <?php echo $row['Color']; ?> </td>
                    <td> <?php echo $row['Estatus']; ?> </td>
                    <td> <?php echo $row['FechaIngreso']; ?> </td>
                    <td><a href="wfrmActualizar.php?Id=<?php echo $row['Id']; ?>"
                            class="btn btn-success btn-md btn-block">Asignar Personal</a></td>
                    <td><a href="wfrmEliminar.php?Id=<?php echo $row['Id']; ?>"
                            class="btn btn-warning btn-md btn-block">Ver detalles</a></td>
                </tr>
                <?php
                }
                 */?>
            </tbody>
        </table>
       
    </div>
    </form>
</body>

</html>