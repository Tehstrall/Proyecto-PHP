<?php
$lista = array(5,9,7);
echo "<table>";
echo "<tr>";
for ($i=0; $i < count($lista); $i++) { 
    echo "<td>";
    echo "<p style='height: 0px;'>";
    for ($j=0; $j < $lista[$i]; $j++) { 
        echo "* <br>";
    }
    echo "</p>";
    echo "</td>";
}
echo "</tr>";
echo "</table>";