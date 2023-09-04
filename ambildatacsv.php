<table border="1" style="border-collapse: collapse;">
<?php 
    $ambilFile = "kontak2.csv";
    $target = fopen($ambilFile,"r");
    while($baris = fgetcsv($target,0,",")){
        echo"<tr>";
        $kolom = count($baris);
        for ($i=0; $i<$kolom; $i++){
            echo "<td style='padding-left: 10px; padding-right: 10px;'>$baris[$i]</td>";
        }
        echo"</tr>";
    }
    fclose($target);
?>
</table>