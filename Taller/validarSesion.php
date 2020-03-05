<?php
session_start();
include("../Conexion/cn.php");
if(isset($_POST['txtUsuario'])){
    $usuario = $_POST['txtUsuario'];
    $password = $_POST['txtPassword'];
    $cmd = $conexion -> prepare("select * from Clientes where  usuario=? and pwd=?");
    $cmd->bind_param("ss",$usuario,$password);
    $cmd->execute();
    $cmd->store_result();
    $cmd->bind_result($Id,$Nombre,$usuario,$password,$rol);
    
    $cmd->fetch();
    
    if($cmd->num_rows > 0){
        $_SESSION['autenticado'] = true;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['IdUsuario'] = $Id;
        $_SESSION['rol'] = $rol;
        header("location: Principal.php");
    } else{
        echo "Variables no identificadas";
        header("location: Login.php?status=400");
    }
}
?>