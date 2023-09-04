<?php 
$total = 0;
for($i=0; $i <=10; $i++){
    $total += (5 *pow($i,2));
}
// pow pada baris kode 4 di atas berfungsi untuk menghitung nilai pangkat.
echo $total;