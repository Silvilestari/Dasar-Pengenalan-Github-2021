<?php
$perusahaan = [
    'nama' => 'Silvi Lestari',
    'umur' => '18 Tahun',
    'alamat' => 'Saluyu Selatan',
    'hobby' => [
        'Membaca',
        [
            '1. Novel',
            '2. Buku Sekolah',
        ],
        'Menggambar'
    ],
    'media sosial' => [
        'Instagram' => 'silviiii1106',
        'Facebook' => 'Silvi Lestari'
    ]
    ];

    echo "<pre>";
    print_r ($perusahaan);

    echo "<br>";
    echo "Program array multidimensi menampilkan satu data <br>";
    echo $perusahaan['nama'] ."<br>";
    echo $perusahaan['hobby'][0] ."<br>";
    echo $perusahaan['hobby'][1][0] ."<br>";
    echo $perusahaan['media sosial']['Facebook'];
?>