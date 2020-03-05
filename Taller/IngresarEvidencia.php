<?php
   /* session_start();
    if(!isset($_SESSION['autenticado'])){
        header("location: Login.php?status=500");
    }
    include("../Conexion/cn.php");*/
    include("../Layout/estilos.php");
    include("../Layout/header.php");
    include("../Layout/scripts.php");
    include("../Layout/menu.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IngresarEvidencia</title>
</head>
<body>
        <div class="container">
           <form action="guardarEvidencia.php" method="post"
           enctype="multipart/form-data">
                <input type="hidden" name="cmbObras" value="<?php echo $_GET['Id'] ?>">
                <div class="form-group row" style="margin:2rem">
                    <div class="col-md-12">
                        <label>Evidencia</label>
                        <input type="file" name="evidencia"
                         id="evidencia" >
                    </div>
                </div>
                <div class="form-group row" style="margin:2rem">  
                    <div class="col-md-12" style="margin:3erm;">
                                <label>Descripción</label>
                                <textarea name="txtDescripcion" id="" class="form-control"
                                    value="<?php //echo $ApellidoM; ?>"></textarea>
                            </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        <input type="submit" value="Guardar evidencia"
                        class="btn btn-dark">
                    </div>
                </div>
           </form>
        </div>
        
    <script>
        $("#evidencia").fileinput({
            language: "es",
            allowedFileExtensions: ["png","jpg"]
        });
    </script>    
</body>
</html>