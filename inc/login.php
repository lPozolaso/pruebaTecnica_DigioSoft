<?php

    session_start();
    include_once 'config.php';
    $objeto = new Conexion();
    $conexion =$objeto->conectar();

    //REcepcion de datos enviados mediante POST en ajax.
    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
    $password = (isset($_POST['password']))? $_POST['password']: '';
    
    $pass = md5($password);//Encripto password enviada.

    $consulta = "SELECT * from usuarios  WHERE usuario = '$usaurio' and password = '$pass' ";

    $resultado = $conexion->prepare($consulta);
    $resultado->execute();

    if($resultado->rowCount()>=1){
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["s_usuario"] = $usuario;
    }else{
        $_SESSION["s_usuario"] = null;
        $data = null;
    }
    print json_encode($data);
    $conexion=null;

?>
