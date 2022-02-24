<?php

class Conexion{
    public static function Conectar() {
        define('servidor', 'localhost');
        define('nombre_db', 'cordoba_app');
        define('usuario', 'cordoba_app');
        define('pass_user', '**********');
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_db, usuario, pass_user, $opciones);

            return $conexion;
        }catch (Exeption $e){
            die("El error de coneccione es: ". $e->getMessage());
        }
    }
}

?>
