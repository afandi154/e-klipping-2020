<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Admin Page</title>
  </head>
	
	<style type="text/css">
	.login-form {
		width: 700px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h1 {
        margin: 0 0 15px;
    }
		
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
				margin-top: 35px;
        font-size: 15px;
        font-weight: bold;
    }
	</style>
	
  <body>
		
		<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top" id="adminNav">
			<div class="container">
				<span class="navbar-brand mb-0 h2">Admin Input Page	</span>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#admin_ekliping" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								E-Kliping
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="adminEklipingCetak.php">E-Kliping Cetak</a>
								<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="adminEklipingOnline.php">E-Kliping Online</a>
							</div>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="adminErelease.php">E-Release <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../Index.php">Log-out</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="login-form">
			<h1 class="font-weight-bold pt-5 text-center">Masukan Data E-Release</h1>
			
			<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
				<div class="form-group">
					<label for="foto">Foto Release</label>
					<div class="custom-file mb-3">
						<input type="file" class="custom-file-input" id="foto" name="foto" required>
						<label class="custom-file-label" for="foto">Pilih file...</label>
					</div>
				</div>
				
				<div class="form-group">
					<label for="berita">Berita Release HUMAS</label>
					<div class="custom-file mb-3">
						<input type="file" class="custom-file-input" id="berita" name="berita" required>
						<label class="custom-file-label" for="berita">Pilih file...</label>
					</div>
				</div>
				
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="tanggal">Tanggal</label>
						<select id="tanggal" class="form-control" name="tanggal">
							<option selected>Pilih Tanggal...</option>
							<option>1</option>	<option>2</option>	<option>3</option>
							<option>4</option>	<option>5</option>	<option>6</option>
							<option>7</option>	<option>8</option>	<option>9</option>
							<option>10</option>	<option>11</option>	<option>12</option>
							<option>13</option>	<option>14</option>	<option>15</option>
							<option>16</option>	<option>17</option>	<option>18</option>
							<option>19</option>	<option>20</option>	<option>21</option>
							<option>21</option>	<option>23</option>	<option>24</option>
							<option>25</option>	<option>26</option>	<option>27</option>
							<option>28</option>	<option>29</option>	<option>30</option> <option>31</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="bulan">Bulan</label>
						<select id="bulan" class="form-control" name="bulan">
							<option selected>Pilih Bulan...</option>
							<option>Januari</option>	<option>Februari</option>	<option>Maret</option>
							<option>April</option>	<option>Mei</option>	<option>Juni</option>
							<option>Juli</option>	<option>Agustus</option>	<option>September</option>
							<option>Oktober</option>	<option>November</option>	<option>Desember</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="Tahun">Tahun</label>
						<input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun...">
					</div>
				</div>
				
				<div class="form-group">
					<label for="judul">Judul Release</label>
					<input type="text" class="form-control" id="judul" name="judul">
				</div>
				
				<div class="form-group">
					<label for="penulis">Penulis </label>
					<input type="text" class="form-control" id="penulis" name="penulis">
				</div>
				
				<div class="form-group">
					<label for="judul">Photografer </label>
					<input type="text" class="form-control" id="photografer" name="photografer">
				</div>
				
				<button type="submit" class="btn btn-primary" name="submit">Submit Data</button>
			</form>
		</div>
		
		<?php
			if(isset($_POST['submit'])) {
				//Format ('server', 'username', 'password', 'database')
				$link = mysqli_connect('localhost', 'root', '', 'test');
				
				// Variabel Foto Release
				$nama_foto = $_FILES['foto']['name'];
				$tmp_foto = $_FILES['foto']['tmp_name']; 
				move_uploaded_file($tmp_foto, 'file e-release/'.$nama_foto);
				
				// Variabel Berita
				$nama_berita = $_FILES['berita']['name'];
				$tmp_berita = $_FILES['berita']['tmp_name'];
				move_uploaded_file($tmp_berita, 'file e-release/'.$nama_berita);
				
				// Variabel Tanggal
				$tanggal = $_POST['tanggal'];
				$bulan = $_POST['bulan'];
				$tahun = $_POST['tahun'];
				
				// Variabel Judul Release
				$judul = $_POST['judul'];
			
				// Variabel Penulis
				$penulis = $_POST['penulis'];
				
				// Variabel Photografer
				$photografer = $_POST['photografer'];
				
				$insert = "INSERT INTO erelease(foto_release, berita_release, tanggal, bulan, tahun, judul, penulis, photografer) VALUES ('"
					. $nama_foto. "','". $nama_berita. "','". $tanggal. "','". $bulan. "','". $tahun. "','". $judul. "','". $penulis. "','". $photografer. "');";

				if(mysqli_query($link, $insert)) {
					echo "<p class='text-center'> Data Berhasil Diupload ! </p>"; 
				} else {
					echo "<p class='text-center'> Data Gagal Diupload ! </p>";
					die(mysqli_error($link));
				}
				
				mysqli_close($link);
			}
		?>
		
		<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>