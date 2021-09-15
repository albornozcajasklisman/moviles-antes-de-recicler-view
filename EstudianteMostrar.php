<?php
use app\controlador\EstudianteController as EC;
require_once "config/autocarga.php";

$estudianteController =new EC();
$resultados=$estudianteController->mostrar();
echo "<table border='1' cellspacing='0'>
     <tr>
        <th>id</th>
        <th>estudiante</th>
        <th>&nbsp;</th>
     </tr>";
foreach($resultados as $estudiante ){
    echo "<tr>
          <td>".$estudiante["id"]."</td>
          <td>".$estudiante["apellidos"].",".$estudiante["nombres"] ."</td>
          <td><a href='matriculaCrear.php?cod=".$estudiante["id"]."'>Matricula</a></td>
         </tr>";
    
}

echo "</table>" ;

?>