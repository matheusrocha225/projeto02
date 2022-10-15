<?php
$alunos = ["Estela", "Douglas", "Paulo Vitor", "Gabriele", "David", "João Vitor"];

echo "<table border=2>";
echo "<tr>";
echo "<th>NOME</th>";
echo "</tr>";


for ($i = 0; $i < 8; $i++) {


 echo "<tr>";
echo "<td>" . $alunos[$i] . "</td>";
echo "</tr>";
}
echo "</table>";

?>