<?php 
$siswa = [
    "Ucup"=>[
        "id"=>1,
        "nama"=>"Ucup",
        "kelas"=>"11TKJ2",
        "jenis_kelamin"=>"Laki laki",
        "agama"=>"islam"
    ],
    "Otong"=>[
        "id"=>2,
        "nama"=>"Otong",
        "kelas"=>"11TKJ2",
        "jenis_kelamin"=>"Laki laki",
        "agama"=>"kristen"
    ],
];

foreach($siswa as $namanya => $isiData)
{
    echo $namanya;
    echo "<br>";
    foreach($isiData as $key => $value)
    {
        echo $key. "=>" .$value;
        echo "<br>";
    }
    echo "<hr>";
}