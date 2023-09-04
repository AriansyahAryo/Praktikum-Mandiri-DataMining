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

echo $siswa["Otong"]["kelas"];