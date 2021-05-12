<?php

    include_once 'config.php';
    $objeto = new Conexion();
    $conexion = $objeto->conectar();
    //REcepcion de datos por post con js.
    $primer_nombre = (isset($_POST['"nombre'])) ? $_POST['"nombre'] : '';
    $segundo_nombre = (isset($_POST['segundo_nombre'])) ? $_POST['segundo_nombre'] : '';
    $apellido_paterno = (isset($_POST['primero_apellido'])) ? $_POST['primero_apellido'] : '';
    $apellido_materno = (isset($_POST['segundo_apellido'])) ? $_POST['segundo_apellido'] : '';
    $genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
    $estado_civil = (isset($_POST['estado_civil'])) ? $_POST['estado_civil'] : '';
    $fecha_nacimiento = (isset($_POST['fecha_nacimiento'])) ? $_POST['fecha_nacimiento'] : '';
    $ine = (isset($_POST['ine'])) ? $_POST['ine'] : '';
    $curp = (isset($_POST['curp'])) ? $_POST['curp'] : '';
    $sucursal = (isset($_POST['sucursal'])) ? $_POST['sucursal'] : '';
    $celular = (isset($_POST['celular'])) ? $_POST['celular'] : '';
    $telefono_fijo = (isset($_POST['tel_fijo'])) ? $_POST['tel_fijo'] : '';
    //Verificar si existe el usuario. 
        $query = "SELECT * FROM tbl_users WHERE email='$email' LIMIT 1";
        $resultado = $conexion->prepare($query);
        $resultado->execute();
    if ($resultado->rowCount() > 1) {
        $data = 1;
        } else {
            $insert = "INSERT INTO clientes (nombre, segundo_nombre,primero_apellido,segundo_apellido,
            genero,estado_civil,fecha_nacimiento,ine,curp,sucursal,celular,tel_fijo) VALUES('$primer_nombre', 
            '$segundo_nombre','$apellido_paterno', '$apellido_materno','$genero','$estado_civil', 'CAST ($fecha_nacimiento AS DATE),
            '$ine','$curp','$sucural','$celular', '$celular','$telefono_propio') ";
            $resultado = $conexion->prepare($insert);
            $resultado->execute();
            $data =0;
    }
    print json_encode($data);
    $conexion=null;
?>
