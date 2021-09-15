<?php
use app\controlador\CursoController;
require_once "app\controlador\CursoController.php";
$cursoController = new CursoController();

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $curso = $cursoController->mostrarPorId($id);
    ?>
    <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
        <input type="text" name="nombre" value="<?= $curso[1] ?>">
        <input type="hidden" name="id" value="<?= $curso[0] ?>">
        <input type="submit" name="submit" value="Guardar">
    </form>
    <?php
}

if (!empty($_POST)) {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    echo $cursoController->actualizar($id, $nombre);
}
