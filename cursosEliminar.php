<?php
use app\controlador\CursoController;
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    require_once "app\controlador\CursoController.php";
    $cursoController = new CursoController();
    echo $cursoController->eliminar($id);
}