<?php
namespace app\modelo;
use config\Conexion;

require_once "config/Conexion.php";
class Estudiante
{
    private $id;
    private $nombres;
    private $apellidos;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function setNombres($nombres): void
    {
        $this->nombres = $nombres;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function guardar(){
        try{
            $conn = new Conexion();
            $sql = "INSERT INTO estudiantes(nombres, apellidos) VALUES('$this->nombres','$this->apellidos')";
            $resultados = $conn->conectar->exec($sql);
            $conn->desconectar();
            return $resultados;
        }catch (\PDOException $e){
            return $e->getMessage();
        }
    }
    public function mostrar(){
        try{
            $conn = new Conexion();
            $sql = "SELECT * FROM  estudiantes";
            $resultados = $conn->conectar->query($sql);
            $conn->desconectar();
            return $resultados;
        }catch (\PDOException $e){
            return $e->getMessage();
        }
    }
}