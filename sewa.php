<html>

    <head>
        <meta charset="UTF-8">
        <title>GoRent! | Rental</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- cdn online -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- bootstrap offline -->
        <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
        <!-- Menyiapkan Javascript -->
        <style> @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap'); </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="sewa.css"> 
        <script src="https://kit.fontawesome.com/dcd38914b7.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <form class="form-booking" method="POST" action="transaksi1.php">
        <div class="container1" id="rentalForm">
            <div class="row">
                <div style="font-family: 'Inter', sans-serif;
                color: #ffffff;
                font-size: 45px;
                font-weight: 600;
                letter-spacing: -2px;
                padding-left: 120px;
                padding-top: 30px;" class="col-md-6">GoRent!</div>
                <div class="col-md-6">
                    <p>
                        <a href="#rentalForm"><i style="color: #CCFF00;" class="fa-solid fa-circle-check"></i>Rental Mobil</a>
                        <a href="#mobil"><i style="color: #474747;" class="fa-solid fa-circle-xmark"></i>Koleksi Mobil</a>
                        <a href="#pp"><i style="color: #474747;" class="fa-solid fa-circle-xmark"></i>Pembayaran</a>
                    </p>
                </div>
                <div class="col-md-12">
                    <img style="width: 102%; margin-top: -20px;" src="img/garis.png" alt="">
                </div>
            </div>
        </div>

        <div class="container2">
            <div class="row">
                <div class="col-md-4">
                    <h3 style="padding-left: 110px; color: white;
                    letter-spacing: -2px; font-size: 45px;">Rental Mobil</h3>
                    <p style="color: white; padding-left: 112px;">Form untuk mengisi data data rental</p>
                </div>

                <div class="col-md-8">
                    <div style="background-color: #1b1d255b; backdrop-filter: blur(25%); opacity: 20px; border-color: #ffffff3f; width: 93%;
                    border-radius: 20px;" 
                    class="card card border-bottom-0 border-left-0">

                    <div class="row">
                        <div style="background-color: #1b1d2500; border: none;" class="card1 col-md-6">
                            <div class="form-group">
                                <label class="form-control-label text-muted">Lokasi</label>
                                <input type="text" id="email" name="lokasi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-muted">Tanggal Mulai</label>
                                <input type="date" id="email" name="tglMulai" class="form-control">
                            </div> 
                            <div class="form-group">
                                <label class="form-control-label text-muted">Tanggal Kembali</label>
                                <input type="date" id="email" name="tglSelesai" class="form-control">
                            </div>
                        </div>

                        <div style="background-color: #1b1d2500; border: none; justify-content: right;" class="card2 col-md-6">
                            <div class="form-group">
                                <label class="form-control-label text-muted">Waktu Mulai</label>
                                <input type="time" id="email" name="waktuMulai" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-muted">Waktu Kembali</label>
                                <input type="time" id="email" name="waktuKembali" class="form-control">
                            </div>
                            <div class="row justify-content-center my-3 px-3">
                                <button style="margin-top: 90px; height: 50px;
                                background-color: none;" class="btn-block btn-color1">
                                <a style="text-decoration: none; color: white;" href="home.php">Cancel</a></button>
                                <button style="width: 200px; height: 50px; margin-top: 90px; margin-left: 20px;
                                margin-bottom: 50px;" class="btn-block btn-color2"><a 
                                style="text-decoration: none; color: white;" href="#mobil">Save & Continue</a></button>
                            </div>
                        </div>

                    </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- mobil -->

        <?php
            include "koneksi.php";
            $idMobil = 1;
            $data = mysqli_query($connect,"Select m.idMobil, m.namaMobil, m.jumlahKursi, m.transmisi, m.jenisBensin, 
            t.hargaPerHari from mobil m left join tarif t on m.idMobil = t.idMobil where m.idMobil = '$idMobil'");
            $hasil = mysqli_fetch_array($data);
    
        ?>

        <!-- label mobil -->

        <div style="margin-top: 100px" class="container1" id="mobil">
            <div class="row">
                <div style="font-family: 'Inter', sans-serif;
                color: #ffffff;
                font-size: 45px;
                font-weight: 600;
                letter-spacing: -2px;
                padding-left: 120px;
                padding-top: 30px;" class="col-md-6">GoRent!</div>
                <div class="col-md-6">
                    <p>
                        <a href="#rentalForm"><i style="color: #CCFF00;" class="fa-solid fa-circle-check"></i>Rental Mobil</a>
                        <a href="#mobil"><i style="color: #CCFF00;" class="fa-solid fa-circle-check"></i>Koleksi Mobil</a>
                        <a href="#pp"><i style="color: #474747;" class="fa-solid fa-circle-xmark"></i>Pembayaran</a>
                    </p>
                </div>
                <div class="col-md-12">
                    <img style="width: 102%; margin-top: -20px;" src="img/garis.png" alt="">
                </div>
            </div>
        </div>

        <!-- continer mobil -->
        <div style="background-color: #1b1d255b; backdrop-filter: blur(25%); opacity: 20px; border-color: #ffffff3f; padding: 30px; 
        border-radius: 20px; border: 1px solid #ffffff3f;
        box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385);" class="container">

            <div class="row">

                <!-- mobil1 -->
                <div class="col-md-4">
                    <div style="background-color: #1b1d255b; backdrop-filter: blur(25%); 
                                opacity: 20px; border-color: #ffffff3f;
                                width: 18rem;  
                                border-radius: 20px;                
                                box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385); " class="card border-left-0 border-bottom-0" class="col-md-4">
                    <i style="color: white; padding-left: 10px;" class="fa-solid fa-1 fa-xl"></i>
                    <img style="width: 300px; height: auto;" src="img/avan.png" class="card-img-top" alt="...">

                        <div style="background-color: #1a1a1a61;
                                    backdrop-filter: blur(25%); opacity: 20px;
                                    border-radius: 20px;
                                    margin-top: -50px;" class="card-body">
                            <p style="color: white; margin-top: -10px;" class="card-text">
                            <i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-comment-dollar fa-xl"></i></i>Rp. <?php
                            echo $hasil['hargaPerHari'];?> <span style="color: #BABABA"> / hari</span></p>
                            <h6 style="color: white; font-size: 28px; font-weight: 400;" class="card-subtitle mb-2"><?php
                            echo $hasil['namaMobil'];?></h6>

                                <div class="row">
                                    <div style="padding-left: 15px;
                                                padding-top: 15px; width: 50%; color: white;" class="kiri">
                                        <h6><i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-couch"></i><?php echo $hasil['jumlahKursi'];?> Seats</h6>
                                        <h6><i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-suitcase"></i>2 Suitcase</h6>
                                    </div>
                                    <div style="width: 50%;padding-left: 15px;
                                                padding-top: 15px; font-size: 14px; color: white;"  class="kanan">
                                        <h6><i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-gas-pump"></i><?php echo $hasil['jenisBensin'];?> </h6>
                                        <h6><i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-gear"></i><?php echo $hasil['transmisi'];?></h6>   
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- mobil2 -->
                <div class="col-md-4">
                    <div style="background-color: #1b1d255b; backdrop-filter: blur(25%); 
                                opacity: 20px; border-color: #ffffff3f;
                                width: 18rem;  
                                border-radius: 20px;                
                                box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385); " class="card border-left-0 border-bottom-0" class="col-md-4">
                                <i style="color: white; padding-left: 10px;" class="fa-solid fa-2 fa-xl"></i>
                                <img style="width: 300px; height: auto;" src="img/audi.png" class="card-img-top" alt="...">
                                
                                <div style="background-color: #1a1a1a61;
                                    backdrop-filter: blur(25%); opacity: 20px;
                                    border-radius: 20px;
                                    margin-top: -50px;" class="card-body">
                                    <p style="color: white; margin-top: -10px;" class="card-text">
                                    <i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-comment-dollar fa-xl"></i></i>Rp. 475000
                                    <span style="color: #BABABA"> / hari</span></p>
                                    <h6 style="color: white; font-size: 28px; font-weight: 400;" class="card-subtitle mb-2">Honda Brio</h6>
                                    
                                    <div class="row">
                                        <div style="padding-left: 15px; padding-top: 15px; width: 50%; color: white;" class="kiri">
                                        <h6><i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-couch"></i>4 Seats</h6>
                                        <h6><i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-suitcase"></i>2 Suitcase</h6>
                                    </div>
                                    <div style="width: 50%;padding-left: 15px;
                                                padding-top: 15px; font-size: 14px; color: white;"  class="kanan">
                                        <h6><i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-gas-pump"></i><?php echo $hasil['jenisBensin'];?> </h6>
                                        <h6><i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-gear"></i>Automatic</h6>   
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- mobil3 -->
                <div class="col-md-4">
                    <div style="background-color: #1b1d255b; backdrop-filter: blur(25%); 
                                opacity: 20px; border-color: #ffffff3f;
                                width: 18rem;  
                                border-radius: 20px;                
                                box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385); " class="card border-left-0 border-bottom-0" class="col-md-4">
                    <i style="color: white; padding-left: 10px;" class="fa-solid fa-3 fa-xl"></i>
                    <img style="width: 300px; height: auto;" src="img/ert.png" class="card-img-top" alt="...">

                        <div style="background-color: #1a1a1a61;
                                    backdrop-filter: blur(25%); opacity: 20px;
                                    border-radius: 20px;
                                    margin-top: -50px;" class="card-body">
                            <p style="color: white; margin-top: -10px;" class="card-text">
                            <i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-comment-dollar fa-xl"></i></i>Rp. 325000 
                            <span style="color: #BABABA"> / hari</span></p>
                            <h6 style="color: white; font-size: 28px; font-weight: 400;" class="card-subtitle mb-2">Suzuki Ertiga</h6>

                                <div class="row">
                                    <div style="padding-left: 15px;
                                                padding-top: 15px; width: 50%; color: white;" class="kiri">
                                        <h6><i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-couch"></i>6 Seats</h6>
                                        <h6><i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-suitcase"></i>2 Suitcase</h6>
                                    </div>
                                    <div style="width: 50%;padding-left: 15px;
                                                padding-top: 15px; font-size: 14px; color: white;"  class="kanan">
                                        <h6><i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-gas-pump"></i><?php echo $hasil['jenisBensin'];?> </h6>
                                        <h6><i style="color: #CCFF00; padding-right: 9px;" class="fa-solid fa-gear"></i>Automatic</h6>   
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- mobiltutup -->
            </div>
            
            <!-- form -->
            <div style="color:white;" class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 style="margin-top: 80px; font-size:50px; font-weight: 800;">Pilih</h1>
                            <p>Silahkan pilih nomor mobil yang sesuai dengan perjalanan Anda</p>
                                <div class="form-group">
                                    <label class="form-control-label text-muted">Pilih Nomor Mobil</label>
                                    <input type="text" id="email" name="id_mobil" class="form-control">
                                </div>
                        <div class="text-right">
                            <button style="width: 200px; height: 50px; margin-bottom: 50px;" class="btn-block btn-color2"><a 
                                style="text-decoration: none; color: white;" href="#pp">Booking</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tutup continer mobil -->

        <!-- label pembayaran -->

        <div style="margin-top: 100px" class="container1" id="pp">
            <div class="row">
                <div style="font-family: 'Inter', sans-serif;
                color: #ffffff;
                font-size: 45px;
                font-weight: 600;
                letter-spacing: -2px;
                padding-left: 120px;
                padding-top: 30px;" class="col-md-6">GoRent!</div>
                <div class="col-md-6">
                    <p>
                    <a href="#rentalForm"><i style="color: #CCFF00;" class="fa-solid fa-circle-check"></i>Rental Mobil</a>
                        <a href="#mobil"><i style="color: #CCFF00;" class="fa-solid fa-circle-check"></i>Koleksi Mobil</a>
                        <a href="#pp"><i style="color: #CCFF00;" class="fa-solid fa-circle-check"></i>Pembayaran</a>
                    </p>
                </div>
                <div class="col-md-12">
                    <img style="width: 102%; margin-top: -20px;" src="img/garis.png" alt="">
                </div>
            </div>
        </div>

        <!-- continer pembayaran -->
        <div style="background-color: #1b1d255b; backdrop-filter: blur(25%); opacity: 20px; border-color: #ffffff3f; padding: 30px; 
            border-radius: 20px; border: 1px solid #ffffff3f;
            box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385);" class="container border-left-0 border-bottom-0" >

            <div class="col-md-12">
                <h5 style="color: white; font-weight: 800; font-size: 40px; margin-bottom: 35px">Payment Details</h5>

                <div class="row">
                    <div style="width: 48%;border: 1px solid white; margin-left: 15px; text-align: center; padding: 30px;
                    background-color: #1b1d255b; backdrop-filter: blur(25%); opacity: 20px; border-color: #ffffff3f; padding: 30px; 
                    border-radius: 20px; border: 1px solid #ffffff3f;
                    box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385);" class="kasir border-left-0 border-bottom-0">
                        <i class="fa-solid fa-cash-register fa-10x"></i>
                        <h6 style="margin-top: 20px; color: white;">1. Cash</h6>
                    </div>
                    <div style="width: 48%;border: 1px solid white; margin-left: 15px; text-align: center; padding: 30px;
                    background-color: #1b1d255b; backdrop-filter: blur(25%); opacity: 20px; border-color: #ffffff3f; padding: 30px; 
                    border-radius: 20px; border: 1px solid #ffffff3f;
                    box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385);" class="atm border-left-0 border-bottom-0">
                        <i class="fa-solid fa-money-check fa-10x"></i>
                        <h6 style="margin-top: 20px; color: white;">2. Debit</h6>
                    </div>
                </div>
                
                <div style="color: white;" class="col-md-6">
                    <h1 style="margin-top: 80px; font-size:50px; font-weight: 800;">Pilih</h1>
                    <p>Silahkan pilih nomor pembayaran yang sesuai</p>
                        <div class="form-group">
                            <label class="form-control-label text-muted">Pilih Nomor Pembayaran</label>
                            <input type="text" id="email" name="id_pembayaran" class="form-control">
                        </div>
                    <div class="text-right">
                        <button style="width: 200px; height: 50px; margin-bottom: 50px;" class="btn-block btn-color2"><a 
                            style="text-decoration: none; color: white;">Bayar</a></button>
                    </div>
                </div>

            </div>

        </div>
        <!-- tutup continer pembayaran -->

    </form>
    </body>
</html>