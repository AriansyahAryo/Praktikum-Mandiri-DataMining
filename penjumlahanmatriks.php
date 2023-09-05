<?php
$A = array(
    array(3, 2, 10, 1),
    array(4, 8, 9, 0),
    array(5, 10, 2, 60)
);

$B = array(
    array(13, 20, 9, 2),
    array(7, -5, -10, 20),
    array(21, 34, 25, -25)
);

$C = array(array());
for ($i = 0; $i <= 2; $i++) {
    for ($j = 0; $j <= 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Penjumlahan Matriks</title>
</head>
<body>
    <h2>Hasil Penjumlahan Matriks A dan B</h2>
    <table border="1">
        <?php
        for ($i = 0; $i <= 2; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= 3; $j++) {
                echo "<td>" . $C[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
