<html>
    

<form action="">

<label for="">Planilla</label>

<?php
$empleados = array( 
array ("Juan Carlos",40,125.60),
array ("Melany Barcenas",39,122.46),
array ("José Manuel",40,125.60),
array ("Andrés Calderón",60,219.80),
array ("Anais García",35,109.90),
array ("María Bernal",45,149.15),


echo "<table>";
echo    "<th>Nombre de Ampleado</th>";
echo    "<th>Horas Trabajadas en la Semana</th>";
echo    "<th>Salario</th>";

for ($fila = 0; $fila<count($empleados); $fila++){
    echo"<tr>";
    foreach ($empleados[$fila] as $valor){
        echo "<td>".$valor. "</td>";
    }
    echo "</tr>";
}
echo "</table>"



);












?>

</form>

</html>