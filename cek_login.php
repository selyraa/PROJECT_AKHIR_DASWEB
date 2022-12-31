<?php
    //panggil koneksi
    include("koneksi.php");

    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $level=$_POST['level']; 

    //mengecek username terdaftar atau tidak
    $query="SELECT * FROM user WHERE username = '$username' and level = '$level'";
    $result = mysqli_query($connect, $query);
    $user_valid = mysqli_fetch_array($result);

    //menguji apabila username terdaftar
    if($user_valid){
        if($password == $user_valid['password']){
            session_start();
            $_SESSION['username'] = $user_valid['username'];
            $_SESSION['namaLengkap'] = $user_valid['namaLengkap'];
            $_SESSION['idUser'] = $user_valid['idUser'];
            $_SESSION['level'] = $user_valid['level'];

            if($level == "Admin"){
                header('location:homeAdmin.php');
            } elseif($level == "Pelanggan") {
                header('location:home.php');
            }
        } else {
            echo "<script>alert('Maaf, Login Gagal. Password Anda tidak terdaftar!');
            document.location='login.php'</script>";
        }
    } else {
        echo "<script>alert('Maaf, Login Gagal. Username Anda tidak terdaftar!');
        document.location='login.php'</script>";
    }
?>