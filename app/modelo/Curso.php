<?php
namespace app\modelo;
use config\Conexion;

require_once "config\Conexion.php";

class Curso{
    private $id;
    private $nombre;

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function mostrar(){
        try {
            $conn = new Conexion();
            $sql = "SELECT * FROM cursos";
            $resultados = $conn->conectar->query($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    public function mostrarPorId(){
        try {
            $conn = new Conexion();
            $sql = "SELECT * FROM cursos WHERE id=$this->id";
            $resultados = $conn->conectar->query($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    public function guardar(){
        try {
            $conn = new Conexion();
            $sql = "INSERT INTO cursos(nombre) VALUES('$this->nombre')";
            $resultados = $conn->conectar->exec($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    public function actualizar(){
        try {
            $conn = new Conexion();
            $sql = "UPDATE cursos SET nombre='$this->nombre' WHERE id=$this->id";
            $resultados = $conn->conectar->exec($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    public function eliminar(){
        try {
            $conn = new Conexion();
            $sql = "DELETE FROM cursos WHERE id=$this->id";
            $resultados = $conn->conectar->exec($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }
}