<?php 
// Analog dengan notasi sigma, untuk perkalian pada suku
// yang banyak, penulisannya dapat disederhanakan
// dengan menggunakan notasi perkalian atau notasi
// product.
$total = 1;
for ($i=1; $i<= 5; $i++) {
    $total *= $i;
}

echo $total;