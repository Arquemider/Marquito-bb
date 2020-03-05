<?php /*
session_start();
include("../Conexion/cn.php");
$cmd = "select Evidencia from Evidencias 
where Id_Usuario=".$_SESSION['IdUsuario']."and
 Id=".$_GET['Id'];//No es la obra si no, evidencia
$resultado = $conexion->query($cmd);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

if($resultado->num_rows > 0) {
header("content-type: image/jpeg");
echo $row['Evidencia'];
}else {
    echo "<h1> Usted no tiene permisos para ver la imagen</h1>";
}*/
?>