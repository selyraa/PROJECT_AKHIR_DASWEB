<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GoRent! | Register</title>
        <!-- Menyisipkan Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
        <!-- Menyisipkan javasript -->
        <script src="https://ajak.googleapis.com/ajak/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajak/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style> @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600&display=swap'); </style>
        <link rel="stylesheet" href="register.css"> 
        <script src="https://kit.fontawesome.com/dcd38914b7.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   		<script src="reg.js"></script>
    </head>
    <body>
	<form class="form-signin" method="POST" action="cek_registrasi.php">
		<div class="container px-4 py-5 mx-auto">
				<div class="d-flex flex-lg-row flex-column-reverse">
					<div  style="background-color: #1b1d255b; backdrop-filter: blur(25%); opacity: 20px; border-color: #ffffff3f;" class="card card1 border-bottom-0 border-right-0">
						<div class="row justify-content-center my-auto">
							<div class="col-md-8 col-10 my-5">
								
								<h3 style="font-family: 'Inter', sans-serif;
								color: #ffffff;
								font-size: 40px;
								font-weight: 600;
								margin-top: 20px" class="mb-5 text-center heading">Register!</h3>
								<p style="font-family: 'Inter', sans-serif;
								color: #ffffff;
								font-weight: 100;
								font-size: 15px;" class="mb-5 text-center">Silahkan isikan data anda</p>

								<div class="form-group">
									<label class="form-control-label text-muted">Nama Lengkap</label>
									<input type="text" id="email" name="namaLengkap" class="form-control">
								</div>

								<div class="form-group">
									<label class="form-control-label text-muted">Username</label>
									<input type="text" id="email" name="username" class="form-control">
								</div>
		
								<div class="form-group">
									<label class="form-control-label text-muted">Password</label>
									<input type="password" id="psw" name="password" class="form-control">
								</div>
		
								<div class="row justify-content-center my-3 px-3">
									<button class="btn-block btn-color">Register</button>
								</div>
		
								<div class="row justify-content-center my-2">
									<a style="margin-bottom: 50px;" href="login.php"><small class="text-muted">Already have an Account?</small></a>
								</div>
							</div>
						</div>

					</div>
					<div class="card card2">
						<div class="my-auto mx-md-5 px-md-5 right">
							<h3 class="text-white">Aplikasi Rental Mobil "GoRent"</h3>
							<small class="text-white">
								GoRent adalah aplikasi penyedia jasa rental mobil dimana penyewa dapat menyewa berbagai macam jenis mobil dengan pilihan sesuai 
								dengan harga dan spesifikasi mobil yang dibutuhkan oleh penyewa
							</small>
						</div>
					</div>
				</div>
		</div>
	
	  </body>
</html>