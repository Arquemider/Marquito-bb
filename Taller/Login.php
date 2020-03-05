<?php 
    session_start();
    echo "hola mundo :3"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller - Inicio de sesion</title>
    <?php
        include("../Layout/estilos.php");
    ?>
</head>
<body style="background-image: url(../img/slide-1.jpg); background-size: 100%;">
    <div class="container">
          <div class="row justify-content-center">
              <div class="col-12">
                  <div class="card mt-5 px-3 px-lg-0 pr-lg-3 py-4 py-lg-0 mb-5 ">
                      <div class="row">
                          <div class="col-6 d-none d-lg-block">
                            <img src="https://source.unsplash.com/random/600x580" alt="" class="card-img w-100">
                          </div>
                          <div class="col-12 col-lg-6">
                              <div class="card-body">
                                  <h5 class="card-title text-center my-lg-4 mb-4 mb-lg-0 font-weight-normal">Inicia sesión</h5>
                                  <form class="container" method="post" action="Administrador.php">
                                  <input type="text" name="txtUsuario" placeholder="Usuario" text=""class="form-control mt-5">
                                        <input required type="password" name="txtPassword" placeholder="Password" id="" class="form-control mt-5">
                                        <div class="custom-control custom-switch mt-5">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                            <label class="custom-control-label" for="customSwitch1">Recordar cuenta</label>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-4">
                                                <input type="submit" value="Login"class="btn btn-outline-dark mt-3 btn-block"></button>
                                            </div>    
                                            <div class="col-12">
                                                <p class="card-text text-center mt-3 mb-0 pb-0">¿No tienes una cuenta?</p>
                                                <a href="wfrmRegistroUsuario.php"><p class="text-center pt-0 mt-0">¡Registrate!</p></a>
                                            </div>
                                        </div>  
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <?php
        include('../Layout/scripts.php');
        if(isset($_GET['status'])){
            id($_GET['status'] == 400);
            echo "<script type='text/javascript'>";
            echo "swal('Precaucion','Usuario Incorrecto','warning')";
            echo "</script>";
        }
    ?>
</body>
</html>