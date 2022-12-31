<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GoRent! | Success!</title>
        <!-- Menyisipkan Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
        <!-- Menyisipkan javasript -->
        <script src="https://ajak.googleapis.com/ajak/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajak/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style> @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600&display=swap'); </style>
        <link rel="stylesheet" href="transaksi.css"> 
        <script src="https://kit.fontawesome.com/dcd38914b7.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <?php
        session_start();
        include("koneksi.php");
        if(isset($_SESSION['username'])){
            $idUser = $_SESSION['idUser'];
        }
        // include "koneksi.php";

        $lokasi = $_POST['lokasi'];
        $tglMulai = new DateTime($_POST['tglMulai']);
        $tglSelesai = new DateTime($_POST['tglSelesai']);
        $id_mobil = $_POST['id_mobil'];
        $id_pembayaran = $_POST['id_pembayaran'];
        $selisih = $tglSelesai->diff($tglMulai);
        $x = $selisih->d;

        $cari = mysqli_query($connect, "SELECT * FROM tarif WHERE idMobil='$id_mobil'");
        $data = mysqli_fetch_array($cari);
        $harga = $x * $data['hargaPerHari'];
        $save = mysqli_query($connect, "INSERT INTO transaksi(idTarif, idPembayaran, idUser, tglMulai, tglKembali, durasi, totalHarga) VALUES('$id_mobil', 
        '$id_pembayaran', '$idUser' ,'$_POST[tglMulai]', '$_POST[tglSelesai]', '$x' ,'$harga')");
    ?>

    <div class="container">
        <div class="card border-bottom-0 border-left-0">
            <div class="card-body text-center">
                <i class="fa-solid fa-user-check fa-6x"></i>
                <h1>Pembayaran Sukses</h1>
                <hr>
                <h5>Jumlah Pembayaran : </h5>
                <h5>Rp. <?php echo $harga;?></h5>
                <hr>
                <button>
                    <a style="text-decoration: none; color: white;" href="riwayatNew.php"><b>Riwayat Order</b> 
                </button>
            </div>
        </div>
    </div>


</body>
</html>

