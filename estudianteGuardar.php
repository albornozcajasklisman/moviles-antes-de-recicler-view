<?php
use app\controlador\EstudianteController;
?>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombres" placeholder="Ingrese Nombres"><br>
    <input type="text" name="apellidos" placeholder="Ingrese Apellidos"><br>
    <input type="submit" name="submit" value="Guardar">
</form>
<?php
if(!empty($_POST)){
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    require_once "app\controlador\EstudianteController.php";
    $estudianteController = new EstudianteController();
    echo $estudianteController->guardar($nombres, $apellidos);
}