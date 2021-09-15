<?php
use app\controlador\CursoController;
?>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombre" placeholder="Ingrese curso">
    <input type="submit" name="submit" value="Guardar">
</form>

<?php
if(!empty($_POST)){
    $nombre = $_POST["nombre"];

    require_once "app\controlador\CursoController.php";
    $cursoController = new CursoController();
    echo $cursoController->guardar($nombre);
}