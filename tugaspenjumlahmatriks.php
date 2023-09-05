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

$C = array();
for ($i = 0; $i < 3; $i++) {
    $C[$i] = array(); // Inisialisasi matriks C
    for ($j = 0; $j < 3; $j++) {
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
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>" . $C[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <hr>
</body>
</html>
