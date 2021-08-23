<?php
    // tipe data dalam sebuah array boleh beda
    // deklarasi array cara lama
    $hari = array("Senin", "Selasa", "Rabu");

    // deklarasi array cara baru
    $bulan = ["Januari", "Februari", "Maret"];
    $hari[] = "Kamis";
    $array = [
        ["Senin", "Selasa", "Rabu"],
        ["Monday", "Tuesday", "Wednesday"]
    ];

    // cetak array multidimensi caranya sama kek C, kasih 2 parameter

    // array associative
    // cara cetaknya sama, klo cetak satu elemen indeksnya ganti string
    $mahasiswa = [
        "nama" => "Jefri Abdurrozak Ismail", 
        "npm" => "18081010059",
        "email" => "jefriismail@netcom.id",
        "jurusan" => "Informatika"
    ];

    // kalau ingin simpan gambar cukup simpan alamatnya
?>