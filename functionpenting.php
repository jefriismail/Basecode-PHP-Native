<?php
    // untuk insert data dari form
    if(isset($_POST["submit"])){
        panggilFungsiInsert($_POST);
    }

    // untuk cek apakah qury berhasil
    if(mysqli_affected_rows($conn) > 0){
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'namafile.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'namafile.php';
            </script>
        ";
    }

    // klo insert data tambahka htmlspecialchars($variabel["key"])

    //klo hapus beri konfirmasi
    <a href="hapus.php?id=ambilIDDdariDatabase" onclick = "return confirm('Yakin?')">Hapus</a>

    // pada form ada <input type="hidden"> untuk ngisi data tapi ga ditampilkan

    // atribut pada tag input untuk otomatis aktif : autofocus

    // klo cari pake LIKE dan wildcard(%)

    // klo handling file pake form tag input type='file'
    // <form action = "" method = "post" enctype = "multipart/form-data">
    // $_FILES
    // move_uploaded_file
    // pake explode('.', $namaFile) untuk mengetahui ekstensi file
    // strtolower(end($ekstensiGambar)) untuk mengambil value pada indeks terakhir array
    // in_array($ekstensiGambar, $ekstensiGambarValid) untuk mencari nilai dalam suatu aray, returnnya boolean
    // move_uploaded_file('$tmpName', 'img/' . $namaFile);
    // return $namaFile untuk disimpan di database
    // $namaFileBaru = uniqid(); $namaFileBaru .= '.'; $namaFileBaru .= '$ekstensiGambar'; untuk generate nama foto yg akan disimpan di database
    // stripslashes($data["username"])  untuk menghilangkan slash
    // mysql_real_escape_string($conn, $data["password"]) untuk menyimpan petik kedalam password
    // password_verify($password, $row[password]) untuk mengecek apakah password input dg yg di database sama
    // session_start() ditaruh diawal halaman untuk memulai session
    // $_SESSION["login"] = true; untuk login
    // $_SESSION = []; session_unset(); session_destroy(); untuk logout
    // setcookie('key', 'value', time()+60); untuk set cookie semlama 1 menit
    // setcookie('key', '', time()-3600); untuk menghapus cookie
    // klo pngin pagination pake LIMIT index_mulai, banyaknya_data_per_page
    // untuk hitung jumlah data dalam satu tabel mysqli_num_rows($result);
    // untuk hitung jumlah nilai dlm array count($array);
    // round() = bulatkan ke terdekat
    // floor() = bulatkan kebawah
    // ceil() = bulatkan keatas
    // ternary operator (isset($_GET["halaman"])) ? kondisi_true : kondisi_false;
    // awal data untuk pagination $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
    // untuk kirim data ke halaman yg sama pake href="?variabel=value"
    // untuk hyperlink pada javascript pake document.location.href = 'article.php';
?>