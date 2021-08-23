<?php
    // tipe data dalam sebuah array boleh beda
    // deklarasi array cara lama
    $hari = array("Senin", "Selasa", "Rabu");

    // deklarasi array cara baru
    $bulan = ["Januari", "Februari", "Maret"];

    // print_r($hari);
    // var_dump($bulan);
    // echo $hari[1];

    // menambahkan elemen di akhir array
    $hari[] = "Kamis";
    $array = [
        ["Senin", "Selasa", "Rabu"],
        ["Monday", "Tuesday", "Wednesday"]
    ];
    // print_r($hari);

    //cetak array
    // for($i = 0; $i < count($hari); $i++){
    //     echo $hari[$i]. "<br>";
    // }
    foreach($array as $bahasa) :
        foreach($bahasa as $siapcetak) :
            echo $siapcetak. "<br>";
        endforeach;
    endforeach;
?>