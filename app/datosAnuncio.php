<?php
    $datoPorUrl = $_GET["ID"];
    include_once 'conexion.php';
    
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $consulta = "SELECT * FROM `anuncio` as a, `anuncio_tipo` as b WHERE a.id_anuncio=b.id_anuncio and b.id_tipo=$datoPorUrl";
    $resultado = $conexion->prepare($consulta);
    $valor = $resultado->execute();

    if($valor){
        while($prueva = $resultado->fetchAll(PDO::FETCH_ASSOC)){
            $data["datos"] = $prueva;
        }
        print json_encode($data, JSON_UNESCAPED_UNICODE);
    }else{
        echo "error";
    }
    
    //$data = $resultado->fetchAll(PDO::FETCH_ASSOC);

    //print json_encode($data, JSON_UNESCAPED_UNICODE);
    $conexion=null;

?>