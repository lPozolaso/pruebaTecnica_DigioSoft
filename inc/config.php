<?php
//INFO PARA CONEXION BD.

class Conexion
{
    public static function Conectar()
    {
        
        $host = 'localhost';
        $db   = 'digio';
        $user = 'root';
        $pass = "";
        $port = "";
        $charset = 'utf8mb4';
        
        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
        try {
             $conexion = new \PDO($dsn, $user, $pass, $options);
             return $conexion;
        } catch (\PDOException $e) {
             throw new \PDOException($e->getMessage(), (int)$e->getCode());
            
        }
    }
}
?>