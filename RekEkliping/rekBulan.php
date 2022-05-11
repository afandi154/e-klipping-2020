<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>HUMAS SETDA Bekasi</title>
  </head>
	<style type="text/css">
		.content-form {
		width: 380px;
		padding-top: 4%;
    	margin: 50px auto;
		}
		.content-form form {
			margin-bottom: 15px;
			background: #f7f7f7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}
			
		.form-control, .btn {
			min-height: 38px;
			border-radius: 2px;
		}
		.btn {
			margin-left: 20px;
			font-size: 15px;
			font-weight: bold;
		}
		 h2 {
			padding-bottom: 20px;
		}
	</style>
	
  <body id="page-top">
		<nav class="navbar navbar-expand-lg navbar-dark p-3 mb-2 bg-primary fixed-top" id="mainNav">
			<div class="container">
				<span class="navbar-brand mb-0 h1">HUMAS SETDA Bekasi</span>
				<button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="../index.php">Beranda</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								E-Kliping
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="../Ekliping/viewEklipingCetak.php">Cetak</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="../Ekliping/viewEklipingOnline.php">Online</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="../Erelease/viewErelease.php">E-Release</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Statistik
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#berita">Berita</a>
								<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#release">Release</a>
							</div>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Rekapitulasi E-Kliping <span class="sr-only">(current)</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="rekMinggu.php">Perminggu</a>
								<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="rekBulan.php">Perbulan</a>
								<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="rekTahun.php">Pertahun</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Rekapitulasi E-Release
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="../RekErelease/rekMinggu.php">Perminggu</a>
								<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="../RekErelease/rekBulan.php">Perbulan</a>
								<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="../RekErelease/rekTahun.php">Pertahun</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="content-form">
			<form class="form-inline" action="" method="GET" enctype="multipart/form-data" autocomplete="off">
				<div class="form-group">
				<label for="bulan" style="padding-right:20px; padding-left:25px; margin-top:-20px">Bulan</label>
					<select id="bulan" class="form-control" name="bulan" style="width:225px; margin-bottom:20px;">
						<option selected>Pilih Bulan...</option>
						<option>Januari</option>	<option>Februari</option>	<option>Maret</option>
						<option>April</option>	<option>Mei</option>	<option>Juni</option>
						<option>Juli</option>	<option>Agustus</option>	<option>September</option>
						<option>Oktober</option>	<option>November</option>	<option>Desember</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="submit1">E-Kliping Cetak</button>
					<button type="submit" class="btn btn-primary" name="submit2">E-Kliping Online</button>
				</div>
			</form>
		</div>
		
		<?php
			// Mysql Connection
			$link = mysqli_connect('localhost', 'root', '', 'test');
			// Checking
			if(!$link) { die(mysqli_error($link)); }
			
			
		?>
		
		<?php if(isset($_GET['submit1'])) : ?>
			<?php
				$bulan = $_GET['bulan'];
				$sql = "SELECT * FROM eklipingCetak WHERE bulan='$bulan'";
			?>
			
			<div class="container">
				<?php if ($result = mysqli_query($link, $sql)): ?>
					<?php if(mysqli_num_rows($result) > 0): ?>
						<h2 class="font-weight-bold text-center">Rekapitulasi E-Kliping(Cetak) Bulan <?php echo $bulan; ?></h2>
						<table class="table">
							<thead class="thead-dark">
							<tr>
								<th scope="col">Tanggal</th>
								<th scope="col">Media</th>
								<th scope="col">Judul Berita</th>
								<th scope="col">Foto 1</th>
								<th scope="col">Foto 2</th>
								<th scope="col">Foto 3</th>
								<th scope="col">Foto 4</th>
								<th scope="col">Foto 5</th>
								<th scope="col">OPD</th>
							</tr>
							</thead>
							<tbody>
							<?php while ($row = $result->fetch_assoc()): ?>
								<tr>
									<td><?php echo $row['tanggal'].'-'. $row['bulan'].'-'. $row['tahun']; ?></td>
									<td><?php echo $row['media']; ?></td>
									<td><?php echo $row['judul']; ?></td>
									<?php if ($row['nama_foto1'] != ""): ?>
										<td><?php echo "<a href='../Admin/file e-kliping/cetak/". $row['nama_foto1']. "' target='_blank'>View</a>"; ?></td>
									<?php else: ?>
										<td><?php echo "---"; ?></td>
									<?php endif; ?>
									<?php if ($row['nama_foto2'] != ""): ?>
										<td><?php echo "<a href='../Admin/file e-kliping/cetak/". $row['nama_foto2']. "' target='_blank'>View</a>"; ?></td>
									<?php else: ?>
										<td><?php echo "---"; ?></td>
									<?php endif; ?>
									<?php if ($row['nama_foto3'] != ""): ?>
										<td><?php echo "<a href='../Admin/file e-kliping/cetak/". $row['nama_foto3']. "' target='_blank'>View</a>"; ?></td>
									<?php else: ?>
										<td><?php echo "---"; ?></td>
									<?php endif; ?>
									<?php if ($row['nama_foto4'] != ""): ?>
										<td><?php echo "<a href='../Admin/file e-kliping/cetak/". $row['nama_foto4']. "' target='_blank'>View</a>"; ?></td>
									<?php else: ?>
										<td><?php echo "---"; ?></td>
									<?php endif; ?>
									<?php if ($row['nama_foto5'] != ""): ?>
										<td><?php echo "<a href='../Admin/file e-kliping/cetak/". $row['nama_foto5']. "' target='_blank'>View</a>"; ?></td>
									<?php else: ?>
										<td><?php echo "---"; ?></td>
									<?php endif; ?>
									<td><?php echo $row['opd']; ?></td>					
								</tr>
							<?php endwhile; ?>
							</tbody>
						</table>
					<?php else : ?>
						<hr class="my-4">
						<h2 class="font-weight-bold text-center">Maaf, Tidak Ada Data Untuk Bulan <?php echo $bulan; ?></h2>
					<?php endif; ?>
				<?php else: ?>
					<?php die(mysqli_error($link)); ?>
				<?php endif; ?>
			</div>
			
		<?php elseif(isset($_GET['submit2'])) : ?>
			<?php
				$bulan = $_GET['bulan'];
				$sql = "SELECT * FROM eklipingOnline WHERE bulan='$bulan'";
			?>
			
			<div class="container">
				<?php if ($result = mysqli_query($link, $sql)): ?>
					<?php if(mysqli_num_rows($result) > 0): ?>
						<h2 class="font-weight-bold text-center">Rekapitulasi E-Kliping(Online) Bulan <?php echo $bulan; ?></h2>
						<table class="table">
							<thead class="thead-dark">
							<tr>
								<th scope="col">Tanggal</th>
								<th scope="col">Media</th>
								<th scope="col">Judul Berita</th>
								<th scope="col">Foto 1</th>
								<th scope="col">Foto 2</th>
								<th scope="col">Foto 3</th>
								<th scope="col">Foto 4</th>
								<th scope="col">Foto 5</th>
								<th scope="col">OPD</th>
							</tr>
							</thead>
							<tbody>
							<?php while ($row = $result->fetch_assoc()): ?>
								<tr>
									<td><?php echo $row['tanggal'].'-'. $row['bulan'].'-'. $row['tahun']; ?></td>
									<td><?php echo $row['media']; ?></td>
									<td><?php echo "<a href=../../". $row['link']. " target='_blank'>". $row['judul']."</a>"; ?></td>								
									<?php if ($row['nama_foto1'] != ""): ?>
										<td><?php echo "<a href='../Admin/file e-kliping/online/". $row['nama_foto1']. "' target='_blank'>View</a>"; ?></td>
									<?php else: ?>
										<td><?php echo "---"; ?></td>
									<?php endif; ?>
									<?php if ($row['nama_foto2'] != ""): ?>
										<td><?php echo "<a href='../Admin/file e-kliping/online/". $row['nama_foto2']. "' target='_blank'>View</a>"; ?></td>
									<?php else: ?>
										<td><?php echo "---"; ?></td>
									<?php endif; ?>
									<?php if ($row['nama_foto3'] != ""): ?>
										<td><?php echo "<a href='../Admin/file e-kliping/online/". $row['nama_foto3']. "' target='_blank'>View</a>"; ?></td>
									<?php else: ?>
										<td><?php echo "---"; ?></td>
									<?php endif; ?>
									<?php if ($row['nama_foto4'] != ""): ?>
										<td><?php echo "<a href='../Admin/file e-kliping/online/". $row['nama_foto4']. "' target='_blank'>View</a>"; ?></td>
									<?php else: ?>
										<td><?php echo "---"; ?></td>
									<?php endif; ?>
									<?php if ($row['nama_foto5'] != ""): ?>
										<td><?php echo "<a href='../Admin/file e-kliping/online/". $row['nama_foto5']. "' target='_blank'>View</a>"; ?></td>
									<?php else: ?>
										<td><?php echo "---"; ?></td>
									<?php endif; ?>
									<td><?php echo $row['opd']; ?></td>				
								</tr>
							<?php endwhile; ?>
							</tbody>
						</table>
					<?php else : ?>
						<hr class="my-4">
						<h2 class="font-weight-bold text-center">Maaf, Tidak Ada Data Untuk Bulan <?php echo $bulan; ?> </h2>
					<?php endif; ?>
				<?php else: ?>
					<?php die(mysqli_error($link)); ?>
				<?php endif; ?>
			</div>
		<?php else: ?>
			<?php die(mysqli_error($link)); ?>
		<?php endif; ?>
		<?php mysqli_close($link); ?>
		
	</body>
</html>