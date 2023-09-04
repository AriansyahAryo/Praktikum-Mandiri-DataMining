<?php 
$siswa = [       
        "id"=>1,
        "nama"=>"Ucup",
        "kelas"=>"11TKJ2",
        "jenis_kelamin"=>"Laki laki",
        "agama"=>"islam"
    ];
    foreach ($siswa as $key => $value)
    {
        echo $key. " = ". $value;
        echo "<br>";
    }