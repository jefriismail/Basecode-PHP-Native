<?php
    require 'connection.php';
    $conn = connection();

    function query($query){
        global $conn;

        $result = mysqli_query($conn, $query);      // isinya objek
        $rows = [];

        while($row = mysqli_fetch_assoc($result)){  // ekstrak objek kedalam array
            $rows[] = $row;
        }

        return $rows;                               // isinya array
    }

    $hasil = query("SELECT * FROM produk");

    var_dump($hasil);
    
    function filter_kategori($kategori_produk){
        $query = "SELECT * FROM produk WHERE kategori_produk = '$kategori_produk'";
        $hasil = mysqli_query(connection(), $query);
        $hasil = mysqli_fetch_assoc($hasil);
        return $hasil;
    }
    function filter_kulit($tipe_kulit){
        $query = "SELECT * FROM produk WHERE tipe_kulit = '$tipe_kulit'";
        $hasil = mysqli_query(connection(), $query);
        $hasil = mysqli_fetch_assoc($hasil);
        return $hasil;
    }
    function filter_kulitnkategori($data){
        $tipe_kulit = $data['tipe_kulit'];
        $kategori_produk = $data['kategori_produk'];
        $query = "SELECT * FROM produk WHERE tipe_kulit = '$tipe_kulit' AND kategoti_produk = '$kategori_produk";
        $hasil = mysqli_query(connection(), $query);
        $hasil = mysqli_fetch_assoc($hasil);
        return $hasil;
    }
    function ambil_review_produk($id_produk){
        $query = "SELECT * FROM review WHERE id_produk = '$id_produk'";
        $hasil = mysqli_query(connection(), $query);
        $hasil = mysqli_fetch_assoc($hasil);
        return $hasil;
    }
    function login_user($data){         //nilai return nya boolean
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];

        if(!empty($username) && !empty($password)){
            $query = "SELECT * FROM user WHERE username = '$username' AND user.password = '$password'";
        }
        else if (!empty($email) && !empty($password)){
            $query = "SELECT * FROM user WHERE email = '$email' AND user.password = '$password'";
        }
        else return false;

        $hasil = mysqli_query(connection(), $query);

        if($hasil) return true;
        else return false;
    }
    function input_user($data){
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $nama = $data['nama'];
        $privilege = $data['privilege'];    //isi dengan "user" atau "admin"
        
        $query = "INSERT INTO user (email, nama, password, privilege, username) VALUES ('$email', '$nama', '$password', '$privilege', '$username')";

        mysqli_query($conn, $query);
        
        return
    }
    // function query($query)
    // {
    //     $result = mysqli_query(connection(), $query);
    //     $record = [];

    //     while ($data = mysqli_fetch_assoc($result)) {
    //         $record[] = $data;
    //     }
    //     return $record;
    // }
    function registrasi($data)
    {
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string(connection(), $data["password"]);
        $password2 = mysqli_real_escape_string(connection(), $data["password2"]);

        $result = mysqli_query(connection(), "SELECT username FROM user WHERE username= '$username'");
        $row = mysqli_fetch_assoc($result);
        var_dump($row);

        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('username sudah terdaftar'); 
                </script>";
            return false;
        }

        if ($password !== $password2) {
            echo "<script>
        alert('konfirmasi password tidak sesuai') </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        // $password = md5($password);
        // var_dump($password);
        // die;

        mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password')");

        echo mysqli_error($conn);
        return mysqli_affected_rows($conn);
    }
    function input_produk($data){
        $id_produk = $data['id_produk'];
        $brand = $data['brand'];
        $varian = $data['varian'];
        $tipe_kulit = $data['tipe_kulit'];
        $kategori_produk = $data['kategori_produk'];
        $foto = $data['foto'];
        $keyword = $data['keyword'];

        $query = "INSERT INTO produk (id_produk, brand, varian, tipe_kulit, kategori_produk, foto, keyword) 
                VALUES ('$id_produk', '$brand', '$varian', '$tipe_kulit', '$kategori_produk', '$foto', '$keyword')";

        mysqli_query(connection(), $query);
    }
    function input_review($data){
        $hasil = mysqli_query(connection(), $query);
        $hasil = mysqli_fetch_assoc($hasil);
        
        $rating_lama = $hasil['rating'];
        $nama = $data['nama'];
        
        if($rating_lama) $rating = ($rating_lama + $data['rating']) / 2 ;
        else $rating = $data['rating'];
        
        $ulasan = $data['ulasan'];
        $id_produk = $data['id_produk'];

        $query = "INSERT INTO review (id_review, nama, rating, ulasan, id_produk) 
                VALUES ('', '$nama', '$rating', '$ulasan', '$id_produk')";

        mysqli_query(connection(), $query);
    }
    function update_user($data){
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $nama = $data['nama'];
        $privilege = $data['privilege'];    //isi dengan "user" atau "admin"
        
        $query = "UPDATE user 
                SET email = '$email', nama = '$nama', password = '$password', privilege = '$privilege', username = '$username'
                WHERE email = '$email'";

        mysqli_query(connection(), $query);
    }
    function update_produk($data){
        $id_produk = $data['id_produk'];
        $brand = $data['brand'];
        $varian = $data['varian'];
        $tipe_kulit = $data['tipe_kulit'];
        $kategori_produk = $data['kategori_produk'];
        $foto = $data['foto'];
        $keyword = $data['keyword'];

        $query = "UPDATE produk 
                SET id_produk = '$id_produk', brand = '$brand', varian = '$varian', tipe_kulit = '$tipe_kulit', 
                    kategori_produk = '$kategori_produk', foto = '$foto', keyword = '$keyword'
                WHERE id_produk = '$id_produk'";
                

        mysqli_query(connection(), $query);
    }
    function update_review($data){
        $hasil = mysqli_query(connection(), $query);
        $hasil = mysqli_fetch_assoc($hasil);
        
        $id_review = $data['id_review'];
        $rating_lama = $hasil['rating'];
        $nama = $data['nama'];
        
        if($rating_lama) $rating = ($rating_lama + $data['rating']) / 2 ;
        else $rating = $data['rating'];
        
        $ulasan = $data['ulasan'];
        $id_produk = $data['id_produk'];

        $query = "UPDATE review 
                SET id_review = '$id_review', nama = '$nama', rating = '$rating', ulasan = '$ulasan', id_produk = '$id_produk'
                WHERE id_review = '$id_review'";

        mysqli_query(connection(), $query);
    }
    function delete_user($email){
        $query = "DELETE FROM user WHERE email = '$email'";
        
        mysqli_query(connection(), $query);
    }
    function delete_produk($id_produk){
        $query = "DELETE FROM review WHERE id_produk = '$id_produk';
                DELETE FROM produk WHERE id_produk = '$id_produk'";
        
        mysqli_query(connection(), $query);
    }
    function delete_review($id_review){
        $query = "DELETE FROM review WHERE id_review = '$id_review'";
        
        mysqli_query(connection(), $query);
    }
?>