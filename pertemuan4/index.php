<?php
    // parameter lihat di dokumentasi
    // echo date("l, d-M-Y");
    // echo time();
    // echo date("l", time()+172800);

    // parameter : jam, menit, detik, bulan, tanggal, tahun
    // mktime(0, 0, 0, 11, 4, 1999);

    // echo strtotime("4 nov 1999");

    // cara bikin parameter default
    function salam($waktu = "Datang", $nama = "Admin"){
        return "Selamat $waktu, $nama!";
    }
?>