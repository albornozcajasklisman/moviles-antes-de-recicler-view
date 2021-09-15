<?php
use app\controlador\CursoController;
require_once "app\controlador\CursoController.php";
$resultados = CursoController::mostrarTodo();

if ($resultados->rowCount() == 0) {
    echo "No hay datos que mostrar";
} else {
    ?>
    <table Border="1" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($resultados as $curso) {
            echo "<tr>
                <td>" . $curso["id"] . "</td>
                <td>" . $curso["nombre"] . "</td>
                <td><a href='cursosActualizar.php?id=" . $curso["id"] . "'>actualizar</a></td>
                <td><a href='cursosEliminar.php?id=" . $curso["id"] . "'>eliminar</a></td>
              </tr>";
        }
        ?>
        </tbody>
    </table>
    <a href="cursosGuardar.php">Registrar Curso</a>
    <?php
}

