<html>
    <head>
        <meta charset="UTF-8">
        <title>GoRent! | Beranda</title>
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
        <link rel="stylesheet" href="homeAdmin.css"> 
        <script src="https://kit.fontawesome.com/dcd38914b7.js" crossorigin="anonymous"></script>
    </head>
    <body>
      <?php
        session_start();
        include("koneksi.php");
        if(isset($_SESSION['username'])){
            $namaLengkap = $_SESSION['namaLengkap'];
            $username = $_SESSION['username'];
            $level = $_SESSION['level'];
        }
      ?>
            <div id="viewport">
                <!-- Sidebar -->
                <div id="sidebar">
                  <header>
                    <a href="#">GoRent!</a>
                  </header>
                  <ul class="nav">
                    <li style="margin-top: 20px;">
                      <a href="#">
                         Dashboard
                      </a>
                    </li>
                    <li style="margin-top: 20px;">
                      <a href="riwayatTrans.php">
                        Riwayat Transaksi
                      </a>
                    </li> 
                    <li style="margin-top: 600px;">
                      <a href="login.php">
                        Logout
                      </a>
                    </li>  
                  </ul>
                </div>
                <!-- Content -->
                <div id="content">
                  <div class="container-fluid">
                    <div style="margin-bottom: 10px" class="row">
                        <h3 style="font-weight: bold; color:white;
                                    margin-top: 10px; margin-left: 30px;" class="text">Dashboard</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div style="border-radius: 20px;
                            box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385);" class="card border-left-0 border-bottom-0">
                                <div class="card-content">
                                  <a><h4 style="text-align: center;
                                  margin-bottom: 30px; margin-top: -2px;
                                  font-weight: bold; margin-top: 20px"><?php echo $username;?>, Welcome Back </h4></a>
                                  <a href="#user"><img style="width: 80%;
                                                      display: block;
                                                      margin-bottom: 30px;
                                                      margin-left: auto;
                                                      margin-right: auto;" 
                                                  src="./img/unnamed.png"></a>
                                  <a><h6 style="text-align: center;
                                  font-size: 25px; font-weight: bold; margin-bottom: 20px"><?php echo $namaLengkap;?></h6></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                        <div class="row">
                        <div class="col-md-6">
                          <div style="border-radius: 20px;
                          box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385);" class="card  border-left-0 border-bottom-0">
                            <div class="card-content">
                              <?php 
                                include("koneksi.php");
                                $query = mysqli_query($connect,"SELECT * FROM transaksi");
                                $jmlTrans = mysqli_num_rows($query);
                                if($jmlTrans<1){
                                  $jmlTrans=0;
                                }
                              ?>
                              <i class="fa-solid fa-book fa-lg"></i>
                              <h4 style="font-weight: bold; margin-top: 20px; margin-left: 20px;" class="card-title">Total Transaksi : 
                              <br> <h4 style="font-weight: 300; margin-top: 20px; margin-left: 20px; margin-bottom: 20px"><?php echo $jmlTrans; ?></h4></h4>
                              </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                          <div style="border-radius: 20px;
                          box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385);" class="card border-left-0 border-bottom-0">
                            <div class="card-content black-text">
                              <?php 
                                include("koneksi.php");
                                $i = 0;
                                $query = mysqli_query($connect,"SELECT * FROM transaksi");
                                while($data = mysqli_fetch_array($query)){
                                  $i++;
                                  $totalHarga[$i] = $data['totalHarga'];
                                }
                                $hasil = array_sum($totalHarga);
                              ?>
                              <i class="fa-solid fa-wallet fa-lg"></i>
                              <h4 style="font-weight: bold; margin-top: 20px; margin-left: 20px;" class="card-title">Total Pendapatan : 
                              <br> <h4 style="font-weight: 300; margin-top: 20px; margin-left: 20px; margin-bottom: 20px">Rp. <?php echo number_format($hasil); ?></h4></h4>
                              </div>
                            </div>
                        </div>
                        </div>

                        <div style="margin-top: 28px" class="row">
                          <div class="col-md-12">
                            <div style="border-radius: 20px;
                            box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385);" class="card border-left-0 border-bottom-0">
                               <div class="card-content">
                                  <i style="margin-left: 570px" class="fa-solid fa-house fa-lg"></i>
                                  <h4 style="font-weight: bold; margin-top: 50px; margin-left: 20px; font-size: 38px">Informasi Admin :</h4>
                                  <h4 style="font-weight: bold; margin-top: 50px; margin-left: 20px;">Nama Lengkap : </h4> 
                                  <h4 style="font-weight: 300; margin-left: 20px;"><?php echo $namaLengkap;?></h4>
                                  <h4 style="font-weight: bold; margin-top: 20px; margin-left: 20px;">Level : </h4>
                                  <h4 style="font-weight: 300; margin-left: 20px; margin-bottom: 90px"><?php echo $level;?></h4>
                               </div>
                            </div>
                          </div>
                        </div>
                        </div>


                        

                    </div>
                  </div>
                </div>
            </div>
    </body>
</html>