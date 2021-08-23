<?php
    // penggunaan variabel lokal sama seperti bahasa lain

    // $x = 10;

    // function tampil(){
    //     $x;             // lokal
    //     global $x;      // global
    // }

    // Variabel super global
    // Semuanya array assositaif
    // $_GET;      // awalnya kosong
    // $_POST;     // awalnya kosong
    // $_REQUEST;
    // $_SESSION;
    // $_COOKIE;
    // $_SERVER;   // awalnya berisi informasi tentang server kita
    // $_ENV;

    // untuk mengisi $_GET bisa pake url?nama=Jefri Abdurrozak Ismail&npm=18081010059
    // var_dump($_GET);

    // fungsi redirect = header("Location: latihan1.php");
    // untuk menghentikan program = exit; atau die;
    // issset($_GET) berarti "apakah variabel $_GET pernah dibuat?"

    // post harus pake form
    // tag input dalam form wajib diberi type dan name; name akan menjadi key dalam array assoc
    // button diberi type="submit"
    // <form action = "latihan4.php" method = "post">  // action berisi page yg akan dituju, method berisi method yg digunakan
    // klo action dikosongkan, dia akan mengirimkan data ke halaman itu sendiri
    // klo method dikosongkaan, nilai otomatisnya adalah get
    // cara cetak $_POST sama kek array assoc   
    // pada form tag label beri for, pada input tambahkan id, pastikan sama persis
?>