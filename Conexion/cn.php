<?php
    $conexion = new mysqli('localhost','HQ4A','Hachiko2213','TallerMecanico');
    $acentos = $conexion -> query("SET NAMES 'utf8'");
    if($conexion -> connect_error){
        die('Error de conexion: '.$conexion -> connect_error);
    }
?>