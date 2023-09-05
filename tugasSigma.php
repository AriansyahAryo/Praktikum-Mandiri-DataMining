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

?>
