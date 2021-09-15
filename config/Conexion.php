<?php
namespace config;

class Conexion{
    private $dsn = "mysql:host=127.0.0.1:3306;dbname=ejemplo4";
    private $username = "root";
    private $password = "";
    private $opciones = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES "UTF8"');
    public $conectar;

    public function __construct()
    {
        $this->conectar = new \PDO($this->dsn, $this->username, $this->password, $this->opciones);
    }

    public function desconectar(){
        $this->conectar = null;
    }
}