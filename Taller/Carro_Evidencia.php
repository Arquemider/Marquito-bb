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
    <title>Carro</title>
</head>

<body>
    <div class="container">
        <form class="container" method="post" action="Actualizar.php">
            <div class="row justify-content-center" style="margin:1rem;">
                <div class="col-12">
                    <div class=" border border-dark">
                        <div class="card bg-light text-white" class="card-header" style="text-align: center;">
                            <h2 class="text-danger"> Datos de
                                <?php //echo $Nombre ?>
                            </h2>
                        </div>

                        <input type="hidden" name="txtId" value="<?php echo $id; ?>">
                        <div class="row justify-content-center" style="margin:1rem;">
                            <div class="col-md-4">
                                <label>Marca</label>
                                <input type="text" name="txtMarca" id="" class="form-control"
                                    value="<?php //echo $Nombre; ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Modelo</label>
                                <input type="text" name="txtModelo" id="" class="form-control"
                                    value="<?php //echo $ApellidoP; ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Color</label>
                                <input type="text" name="txtColor" id="" class="form-control"
                                    value="<?php //echo $ApellidoM; ?>">
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin:1rem;">
                            <div class="col-md-4">
                                <label>Estatus</label>
                                <input type="text" name="txtEstatus" id="" class="form-control"
                                    value="<?php //echo $ApellidoM; ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Fecha Ingreso</label>
                                <input type="date" name="txtFechaIngreso" id="" class="form-control"
                                    value="<?php //echo $ApellidoM; ?>">
                            </div>

                            <div class="col-md-4">
                                <label>Fecha evidencia</label>
                                <input type="date" name="txtFechaEvidencia" id="" class="form-control"
                                    value="<?php //echo $ApellidoM; ?>">
                            </div>
                        </div>

                        <div class="row justify-content-center" style="margin:1rem;">
                            <div class="col-md-6">
                                <label>Comentario</label>
                                <textarea name="txtComentario" id="" class="form-control"
                                    value="<?php //echo $ApellidoM; ?>"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label>Descripción</label>
                                <textarea name="txtDescripcion" id="" class="form-control"
                                    value="<?php //echo $ApellidoM; ?>"></textarea>
                            </div>
                        </div>

                        <!--  <div class="form-group row">
                            <div class="col-12 text-center">
                                <input type="submit" value="Actualizar" class="btn btn-warning">
                                <a href="Maestros.php" class="btn btn-info">Regresar</a>
                            </div>
                        </div> -->
                    </div>
                </div>
        </form>

        <table class="table table-hover table table-bordered" style="margin:1rem;">
            <thead>
                <tr class="thead-dark ">
                    <th scope="col"> ID </th>
                    <th scope="col"> Marca </th>
                    <th scope="col"> Modelo </th>
                    <th scope="col"> Color </th>
                    <th scope="col"> Descripción</th>
                    <th scope="col"> Estatus</th>
                    <th scope="col"> Fecha Ingreso</th>
                    <th scope="col"> Comentario</th>
                    <th scope="col"> Fecha evidencia</th>
                    <th scope="col"> Foto</th>
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
                    <td> <?php echo $row['Descripcion']; ?> </td>
                    <td> <?php echo $row['Estatus']; ?> </td>
                    <td> <?php echo $row['FechaIngreso']; ?> </td>
                    <td> <?php echo $row['FechaFin']; ?> </td>
                    <td> <?php echo $row['Comentario']; ?> </td>
                    <td> <?php echo $row['Fecha']; ?> </td>
                    <td><a href="Foto.php?Id=<?php echo $row['Id']; ?>"
                            class="btn btn-success btn-md btn-block">Ver</a></td>

                </tr>
                <?php
                }
                 */       ?>
            </tbody>
        </table>
    </div>
</body>

</html>