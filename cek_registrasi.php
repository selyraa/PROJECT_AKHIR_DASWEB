<?php
    //panggil koneksi
    include "koneksi.php";

    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $namaLengkap=$_POST['namaLengkap'];
    $level = 'Pelanggan';

    $query="INSERT INTO user(username, namaLengkap, password, level) VALUES ('$username', '$namaLengkap', '$password', '$level')";

    if(mysqli_query($connect, $query)){
        echo "<script>alert('Registrasi Berhasil');
            document.location='login.php'</script>";
    } else {
        echo "Data gagal ditambah <br>" . mysqli_error($connect);
    }
    ?>