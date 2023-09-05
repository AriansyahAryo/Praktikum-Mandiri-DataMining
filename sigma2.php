<?php 

$total=0;
for($i=1;$i<=5;$i++){
    echo $i;
    if($i<5){
        echo "+";
    }
    $total=$total+$i;
}

echo "=";
echo $total;