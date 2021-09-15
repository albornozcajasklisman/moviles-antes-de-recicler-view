<?php
namespace app\controlador;
use app\modelo\Curso;

require_once "config\autocarga.php";

class CursoController{

    public static function mostrarTodo(): \PDOStatement{
        $curso = new Curso();
        $resultados = $curso->mostrar();
        return $resultados;
    }

    public function mostrarPorId(int $id): array{
        $curso = new Curso();
        $curso->setId($id);
        $resultados = $curso->mostrarPorId();

        $data = array();
        foreach ($resultados as $curso) {
            $data[0] = $curso["id"];
            $data[1] = $curso["nombre"];
        }
        return $data;
    }

    public function guardar(string $nombre){
        $curso = new Curso();
        $curso->setNombre($nombre);
        $resultado = $curso->guardar();

        if($resultado!=1){
            return $mensaje = "no se guardó";
        }else{
            header("location: cursosMostrar.php");
        }
    }

    public function actualizar(int $id, string $nombre): string{
        $curso = new Curso();
        $curso->setId($id);
        $curso->setNombre($nombre);
        $resultado = $curso->actualizar();
        if ($resultado != 1) {
            $mensaje = "No se actualizó";
        } else {
            $mensaje = "registro actualizado";
        }
        return $mensaje;
    }

    public function eliminar(int $id){
        $curso = new Curso();
        $curso->setId($id);
        $resultado = $curso->eliminar();
        if ($resultado != 1) {
            return $mensaje = "No se eliminó";
        } else {
            header("location: cursosMostrar.php");
        }
    }
}