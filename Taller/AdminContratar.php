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
                <div class="col-9">
                    <div class=" border border-dark">
                        <div class="card bg-light text-white" class="card-header" style="text-align: center;">
                            <h2 class="text-danger"> LLena los datos
                                <?php //echo $Nombre ?>
                            </h2>
                        </div>

                        <input type="hidden" name="txtId" value="<?php echo $id; ?>">
                        <div class="row justify-content-center" style="margin:1rem;">
                            <div class="col-md-6">
                                <label>Nombre</label>
                                <input type="text" name="txtNombre" id="" class="form-control"
                                    value="<?php //echo $Nombre; ?>">
                            </div>
                            <div class="col-md-6">
                                <label>Nombre Usuario</label>
                                <input type="text" name="txtNombreUsuario" id="" class="form-control"
                                    value="<?php //echo $ApellidoP; ?>">
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin:1rem;">
                            <div class="col-md-7">
                                <label>Contraseña</label>
                                <input type="password" name="txtContraseña" id="" class="form-control"
                                    value="<?php //echo $ApellidoM; ?>">
                            </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-12 text-center">
                                <input type="submit" value="Contratar" class="btn btn-warning">
                            </div>
                        </div> 
                    </div>
                </div>
        </form>
    </div>
</body>

</html>