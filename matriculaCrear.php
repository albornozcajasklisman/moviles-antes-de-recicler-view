<?php
use app\controlador\CursoController;
require_once "config/autocarga.php";

if(!empty($_GET)){
    $codigoEstudiante=$_GET["cod"];
}
$cursoController =new CursoController;
$resultado =$cursoController::mostrarTodo();

?>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>" >
<select name="curso">
    <?php

foreach($resultado as $curso)
  echo "<option value='".$curso["id"]."'>".$curso["nombre"]."</option>"
?>
</select>
<input type="hidden" name="estudiante" value="<?=$codigoEstudiante?>">
<input type="submit" value="Matricular">
</form>
<?php
echo "<br>";
if(!empty($_POST))
 echo $id_curso= $_POST["curso"];
 echo $id_estudiante =$_POST["estudiante"];
?>
