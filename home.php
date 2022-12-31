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
        <link rel="stylesheet" href="home.css"> 
        <script src="https://kit.fontawesome.com/dcd38914b7.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm justify-content-center">
            <div style="background-color: rgb(255, 255, 255); padding:6px 30px 6px 30px; border-radius: 30px; margin-top: 20px;" class="container">
                <a style="color: black; font-weight:bold;" class="navbar-brand" href="#">GoRent!</a>
                <button style="background: black; border: none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span style="width: 20px; height: 20px;" class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="sewa.php">Rental</a>
                    <a class="nav-item nav-link" href="sewa.php #mobil">Mobil</a>
                    <a class="nav-item nav-link" href="riwayatNew.php">Riwayat</a>
                </div>
                <i class="fa fa-bell" aria-hidden="true"></i>
                <img style="width: 27px; height: auto; margin-left: 8px;" src="img/profil.png" alt="">
              <i class="fa fa-caret-down fa-2xs" aria-hidden="true"></i>
            </div>
          </div>
        </nav>

        <div style="margin-top: 100px;" class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Aplikasi Sewa
                        <br> Mobil <span style=" color: rgba(255, 0, 0, 0); -webkit-text-stroke-width: 1px;
                        -webkit-text-stroke-color: rgb(255, 255, 255);
                        font-family: 'Archivo Black', sans-serif;">GoRent!</span>
                    </h1>
                    <h2>Go Trip Better</h2>
                    <br>
                    <p style="font-size:20px; font-weight: lighter; color: white; line-height: 30px;">Kami memberikan banyak penawaran yang berkualitas,
                        <br> dengan harga yang terjangkau serta pelayanan yang profesional.</p>
                    <button>
                        <a style="text-decoration: none; color: white;" href="sewa.php"><b>Sewa Sekarang</b> <i class="fa-solid fa-arrow-right" style="padding-left: 10px;"></i></a>
                    </button>
                </div>

                <div class="col-md-3">
                    <div class="card border-left-0 border-bottom-0" style="width: 18rem;  border-radius: 20px; 
                    box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385); ">
                        <img style="width: 300px; height: auto;" src="img/avan.png" class="card-img-top" alt="...">
                        <div style="background-color: #1a1a1a61;
                             backdrop-filter: blur(25%); opacity: 20px;
                             border-radius: 20px;
                             margin-top: -50px;" class="card-body">
                                <h5 style="text-align: right;
                                font-size: 24px;
                                font-family: 'Inter', sans-serif;
                                color: white;
                                font-weight: 800;" class="card-title">#No 1<i style="margin-left: 5px; color: #CCFF00;" class="fa-sharp fa-solid fa-square-up-right"></i></h5>
                                <h6 style="color: white; font-size: 24px; font-weight: 800;" class="card-subtitle mb-2">Avanza</h6>
                                <p style="color: white; margin-top: -10px; font-size: 18px;" class="card-text">Rp.500.000 <span style="margin-left: 80px; font-size: 17px; font-weight: 800;">Manual</span></p>
                                <a style="text-align: left; font-size: 11px; color: #BDBDBD;" href="#"><i style="margin-right: 5px;" class="fa-solid fa-circle-info"></i>Informasi lanjutan terdapat di menu mobil</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-left-0 border-bottom-0" style="width: 14rem;  border-radius: 20px; 
                    box-shadow: 6px 6px 24px rgba(0, 0, 0, 0.385); margin-left: 35px; margin-top: 45px;">
                        <img style="width: 220px; height: auto;" src="img/audi.png" class="card-img-top" alt="...">
                            <div style="background-color: #1a1a1a61;
                             backdrop-filter: blur(25%); opacity: 20px;
                             border-radius: 20px;
                             margin-top: -50px;" class="card-body">
                                <h5 style="text-align: right;
                                font-size: 13px;
                                font-family: 'Inter', sans-serif;
                                color: white;
                                font-weight: 800;" class="card-title">#No 2 <i style="margin-left: 5px; color: #CCFF00;" class="fa-sharp fa-solid fa-square-up-right"></i></h5>
                                <h6 style="color: white; font-size: 13px; font-weight: 800;" class="card-subtitle mb-2">Audi</h6>
                                <p style="color: white; margin-top: -10px; font-size: 13px;" class="card-text">Rp.475.000 <span style="margin-left: 60px; font-size: 13px; font-weight: 800;">Manual</span></p>
                                <a style="text-align: left; font-size: 8px; color: #BDBDBD;" href="#"><i style="margin-right: 5px;" class="fa-solid fa-circle-info"></i>Informasi lanjutan terdapat di menu mobil</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <footer style="margin-top: 100px;" class="footer">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h5 style="color: white; font-size: 18px;" class="footer-content">GoRent<i style="margin-left: 10px;" class="fa-sharp fa-solid fa-share-nodes"></i> 
                        <img src="img/gr.png" alt=""><i style="margin-right: 10px;" class="fa-regular fa-copyright"></i>grouptwocreative, agency2h technical information
                        <img src="img/gr.png" alt="">Mlg, Idn</h5>
						<p class="menu">
							<a href="contact.html">Contact</a>
							<a href="login.php">Logout</a>
						</p>
					</div>
				</div>
			</div>
		</footer>

    </body>
</html>