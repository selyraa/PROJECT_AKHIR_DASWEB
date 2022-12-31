<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>GoRent! | Riwayat</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- cdn online -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- bootstrap offline -->
        <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
        <!-- Menyiapkan Javascript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
        <style> @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap'); </style>
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="riwayat.css"> 
        <script src="https://kit.fontawesome.com/dcd38914b7.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <?php
        include "koneksi.php";

        $cari = mysqli_query($connect, "SELECT u.namaLengkap, m.namaMobil, p.jenisPembayaran, t.tglMulai, t.tglKembali, t.durasi, t.totalHarga FROM transaksi t
        INNER JOIN tarif tr ON tr.idTarif = t.idTarif INNER JOIN mobil m ON m.idMobil = tr.idMobil INNER JOIN metodepembayaran p 
        ON p.idPembayaran = t.idPembayaran INNER JOIN user u ON u.idUser = t.idUser ORDER BY t.idTransaksi");
        // $data = mysqli_fetch_array($cari);

    ?>

    <div class="text-right">
        <button style="width: 5%; margin-right: 20px" class="btn">
        <a href="cetak.php"><i style="color: white;" class="fa-solid fa-print fa-lg"></i></a>
        </button>
    </div>
    
    <h2 style="text-align: center; color: white; font-weight: 600;
                margin-bottom: 20px;
                font-size: 36px;">Riwayat Transaksi</h2>
    <?php
        $no = 1;
        while($data = mysqli_fetch_array($cari)){
    ?>

    <div class="container">
        <div class="content">

            <div class="row">
                <div style="margin-top: 45px; font-size: 45px; color: white; text-align: center;" class="col-md-1">
                    <?php echo $no; ?>
                </div>
                <div class="col-md-11">
                    <div style="width: 97%" class="row">
                        <div style="background-color: #1a1a1a61;
                                    backdrop-filter: blur(25%); 
                                    opacity: 20px; margin-top:20px;
                                    border: 1px solid #ffffff3f;
                                    box-shadow: 0px 17px 15px -3px rgba(0,0,0,0.1);" class="col-md-3 border-right-0 border-bottom-0">
                            <h6 style="margin-top: 10px; font-size: 12px; color: #ffffff3f">Nama : </h6>
                            <h2 style="color: white; font-weight: 800;"><?php echo $data['namaLengkap']?></h2>
                        </div>
                        <div style="background-color: #1a1a1a61;
                                    backdrop-filter: blur(25%); 
                                    opacity: 20px; margin-top:20px;
                                    border: 1px solid #ffffff3f;
                                    box-shadow: 0px 17px 15px -3px rgba(0,0,0,0.1);" class="col-md-3 border-right-0 border-bottom-0 border-left-0">
                            <h6 style="margin-top: 10px; font-size: 12px; color: #ffffff3f">Nama Mobil : </h6>
                            <h6 style="font-size: 28px; color: white;"><?php echo $data['namaMobil']?></h6>
                            <h6 style="margin-top: 15px; font-size: 12px; color: #ffffff3f">Jenis Pembayaran : </h6>
                            <h6 style="font-size: 28px; color: white;"><?php echo $data['jenisPembayaran']?></h6>    
                        </div>
                        <div style="background-color: #1a1a1a61;
                                    backdrop-filter: blur(25%); 
                                    opacity: 20px; margin-top:20px;
                                    border: 1px solid #ffffff3f;
                                    box-shadow: 0px 17px 15px -3px rgba(0,0,0,0.1);" class="col-md-3 border-right-0 border-bottom-0 border-left-0">
                            <h6 style="margin-top: 10px; font-size: 12px; color: #ffffff3f; margin-top: 10px">Tanggal Mulai : </h6>
                            <h6 style="font-size: 15px; color: white; font-weight: 100"><?php echo $data['tglMulai']?></h6>
                            <h6 style="margin-top: 10px; font-size: 12px; color: #ffffff3f; margin-top: 15px">Tanggal Kembali : </h6>
                            <h6 style="font-size: 15px; color: white; font-weight: 100"><?php echo $data['tglKembali']?></h6>
                            <h6 style="margin-top: 10px; font-size: 12px; color: #ffffff3f; margin-top: 15px">Durasi : </h6>
                            <h6 style="font-size: 15px; color: white; margin-bottom:10px; font-weight: 100"><?php echo $data['durasi']?> hari</h6>
                        </div>
                        <div style="background-color: #1a1a1a61;
                                    backdrop-filter: blur(25%); 
                                    opacity: 20px; margin-top:20px;
                                    border: 1px solid #ffffff3f;
                                    box-shadow: 0px 17px 15px -3px rgba(0,0,0,0.1);" class="col-md-3 border-right-0 border-bottom-0 border-left-0">
                            <h6 style="font-size: 12px; color: #ffffff3f; margin-top: 10px">Total : </h6>
                            <h2 style="color: white; font-weight: 800">Rp. <?php echo number_format($data['totalHarga'])?></h2>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>

    <?php
        $no++;
        }
    ?>

    <div class="col-md-12 text-center">
        <button>
            <a style="text-decoration: none; color: white;" href="homeAdmin.php"><b>Home</b> <i class="fa-solid fa-arrow-right" style="padding-left: 10px;"></i></a>
        </button>
    </div>
    
</body>
</html>