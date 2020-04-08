<!DOCTYPE html>
<html>
<head>
	<title>Validasi Form</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		.warning{color: #FF0000;}
	</style>
</head>
<body>

	<!-- PHP Validation -->
	<?php

		//Inisialisasi
		$error_nama		= "";
		$error_email 	= "";
		$error_web 		= "";
		$error_pesan	= "";
		$error_telp 	= "";

		$nama 	= "";
		$email 	= "";
		$web 	= "";
		$pesan 	= "";
		$telp 	= "";

		//Function Cek Input Bila Input Sudah Terisi
		function cek_input($data){
			$data = trim($data); //Untuk Menghilangkan "\0", "\t", "\n", "\x0B", "\r", " " (Ordinary space)
			$data = stripslashes($data); //Menghilangkan backslash yang ditambahkan dengan addslashes() function
			$data = htmlspecialchars($data); //Mencegah browser agar tidak menggunakan tag HTML pada input oleh user.

			return $data;
		}

		//Validasi Isi Form
		if( $_SERVER['REQUEST_METHOD'] == "POST" ){  //echo "test submit";
			
			//Validasi Kekosongan Input Nama dan Tidak Mengandung karakter selain huruf dan spasi
			if( empty($_POST['nama']) ){
				$error_nama = "KOLOM NAMA : tidak boleh kosong";
			}else{
				$nama = cek_input( $_POST['nama'] );

				if( !preg_match("/^[a-zA-Z ]*$/", $nama) ){
					$error_nama = "KOLOM NAMA : hanya boleh huruf dan spasi";
				}
			}

			
			//Validasi Kekosongan Input Email dan Format Email
			if( empty($_POST['email']) ){
				$error_email = "KOLOM EMAIL : tidak boleh kosong";
			}else{
				$email = cek_input( $_POST['email'] );

				if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
					$error_email = "KOLOM EMAIL : Format Email INVALID";
				}
			}

			
			//Validasi Kekosongan Input Pesan
			if( empty($_POST['pesan']) ){
				$error_pesan = "KOLOM PESAN : tidak boleh kosong";
			}else{
				$pesan = cek_input( $_POST['pesan'] );
			}

			
			//Validasi Kekosongan Input Website dan Format Link/URL
			if( empty($_POST['web']) ){
				$error_web = "KOLOM WEBSITE : tidak boleh kosong";
			}else{
				$web = cek_input( $_POST['web'] );

				if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $web) ){
					$error_web = "KOLOM WEBSITE : URL Tidak Valid";
				}
			}

			
			//Validasi Kekosongan Input Telepon dan Isi Input berupa Nomor
			if( empty($_POST['telp']) ){
				$error_telp = "KOLOM TELEPON : tidak boleh kosong";
			}else{
				$telp = cek_input( $_POST['telp'] );

				if( !is_numeric($telp) ){
					$error_telp = "KOLOM TELEPON : hanya boleh berisi angka";
				}
			}

		}


	?>

	<div class="row">
		
		<div class="col-md-6">
			<div class="card">

				<div class="card-header">
					Contoh Validasi Form dengan PHP
				</div>

				<div class="card-body">					
					<form method="POST" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>">
						
						<div class="form-group row">
							<label for="nama" class="col-sm-2 col-form-label"> Nama </label>
							<div class="col-sm-10">
								<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="nama" value="<?php echo $nama; ?>">
								<span class="warning"> <?php echo $error_nama; ?> </span>
							</div>
						</div>

						<div class="form-group row">
							<label for="email" class="col-sm-2 col-form-label"> Email </label>
							<div class="col-sm-10">
								<input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder="email" value="<?php echo $email; ?>">
								<span class="warning"> <?php echo $error_email; ?> </span>
							</div>
						</div>

						<div class="form-group row">
							<label for="web" class="col-sm-2 col-form-label"> Website </label>
							<div class="col-sm-10">
								<input type="text" name="web" class="form-control <?php echo ($error_web !="" ? "is-invalid" : ""); ?>" id="web" placeholder="web" value="<?php echo $web; ?>">
								<span class="warning"> <?php echo $error_web; ?> </span>
							</div>
						</div>

						<div class="form-group row">
							<label for="telp" class="col-sm-2 col-form-label"> Telp </label>
							<div class="col-sm-10">
								<input type="text" name="telp" class="form-control <?php echo ($error_telp !="" ? "is-invalid" : ""); ?>" id="telp" placeholder="telp" value="<?php echo $telp; ?>">
								<span class="warning"> <?php echo $error_telp; ?> </span>
							</div>
						</div>

						<div class="form-group row">
							<label for="pesan" class="col-sm-2 col-form-label"> Pesan </label>
							<div class="col-sm-10">
								<textarea name="pesan" class="form-control <?php echo ($error_pesan !="" ? "is-invalid" : ""); ?>" placeholder="Masukkan Pesan"><?php echo $pesan; ?></textarea>
								<span class="warning"> <?php echo $error_pesan; ?> </span>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary"> Sign-In </button>
							</div>
						</div>

					</form>
				</div>

			</div>
		</div>
		
	</div>

	<!-- PHP Display -->
	<?php

		echo "<h2>Your Input:</h2>";
		echo "Nama = ".$nama;
		echo "<br>";
		echo "Email = ".$email;
		echo "<br>";
		echo "Website = ".$web;
		echo "<br>";
		echo "Telp = ".$telp;
		echo "<br>";
		echo "Pesan = ".$pesan;

	?>

</body>
</html>