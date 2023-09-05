<?php 
$A = array(
    array(1, 4, 5),
    array(8, 5, 3),
    array(3, 6, 9)
);

$B = array(
    array(1, 4, 5),
    array(4, 5, 6),
    array(3, 6, 7)
);

echo "A = ";
echo "<br>";
echo "<table border='0' cellpadding='5px'>";
for ($i=0; $i <= 2; $i++) {
    echo  "<tr>";
    for ($j=0; $j<=3; $j++){
        echo "<td>";
        echo $A[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";