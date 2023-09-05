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

// Penjumlahan Matriks
$penjumlahan = array();
for ($i = 0; $i < 3; $i++) {
    $penjumlahan[$i] = array();
    for ($j = 0; $j < 3; $j++) {
        $penjumlahan[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Pengurangan Matriks
$pengurangan = array();
for ($i = 0; $i < 3; $i++) {
    $pengurangan[$i] = array();
    for ($j = 0; $j < 3; $j++) {
        $pengurangan[$i][$j] = $A[$i][$j] - $B[$i][$j];
    }
}

// Perkalian Matriks
$perkalian = array();
for ($i = 0; $i < 3; $i++) {
    $perkalian[$i] = array();
    for ($j = 0; $j < 3; $j++) {
        $perkalian[$i][$j] = 0;
        for ($k = 0; $k < 3; $k++) {
            $perkalian[$i][$j] += $A[$i][$k] * $B[$k][$j];
        }
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Operasi Matriks</title>
</head>
<body>
    <h2>Hasil Penjumlahan Matriks A dan B</h2>
    <table border="1" style="border-collapse: collapse;">
        <?php
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>" . $penjumlahan[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
            <hr>
    <h2>Hasil Pengurangan Matriks A dan B</h2>
    <table border="1" style="border-collapse: collapse;">
        <?php
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>" . $pengurangan[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
            <hr>
    <h2>Hasil Perkalian Matriks A dan B</h2>
    <table border="1" style="border-collapse: collapse;">
        <?php
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>" . $perkalian[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <hr>
    <?php

$total = 0;

for ($z = 0; $z <= 100; $z += 2) {
    echo $z;
    if ($z < 100 - 1) {
        echo "+";
    }
    $total = $total + $z;
}

echo "=";
echo $total;
echo "<br>";
?>
<h3>Totalnya adalah <?= $total; ?></h3>
</body>
</html>
