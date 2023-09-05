<?php 
$A = array(
    array(3,2,10,1),
    array(4,8,9,0),
    array(5,10,2,60)
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