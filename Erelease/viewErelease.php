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
		.search-form {
			width: 430px;
    	margin: 35px auto;
		}
		.search-form form {
			margin-bottom: 10px;
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
						<li class="nav-item  active">
							<a class="nav-link js-scroll-trigger" href="viewErelease.php">E-Release<span class="sr-only">(current)</span></a>
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
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Rekapitulasi E-Kliping
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="../RekEkliping/rekMinggu.php">Perminggu</a>
								<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="../RekEkliping/rekBulan.php">Perbulan</a>
								<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="../RekEkliping/rekTahun.php">Pertahun</a>
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
		
		<?php
			// Mysql Connection
			$link = mysqli_connect('localhost', 'root', '', 'test');
			// Checking
			if(!$link) { die(mysqli_error($link)); }
			
		?>
		
		<div class="row pt-5 mt-1">
			<div class="col-sm">
				<h1 class="font-weight-bold text-center" style="margin-top:13%; margin-left:15%;">View Data E-Kliping(Cetak)</h1>
			</div>
			<div class="col-sm pt-4">
				<div class="search-form">
					<form class="form-inline" action="" method="GET" enctype="multipart/form-data" autocomplete="off">
						<div class="form-group">
							<label for="search" style="padding-right:20px;">Cari</label>
							<input type="text" class="form-control" id="search" name="search" placeholder="Penulis, Photografer">
						</div>
						<button type="submit" class="btn btn-primary" name="submit">Cari Data</button>
					</form>
				</div>
			</div>
		</div>
		
		<hr class="my-4" style="width:80%;">
		
		<?php if(isset($_GET['submit'])) : ?>
			<?php
				$search = $_GET['search'];
				$sql = "SELECT * FROM eRelease WHERE judul='$search' or penulis='$search' or photografer='$search'";
			?>
			<?php if ($result = mysqli_query($link, $sql)): ?>
				<?php if(mysqli_num_rows($result) > 0): ?>
					<div class="container bg-light">
						<?php while ($row = $result->fetch_assoc()): ?>
							<div class="row border">
								<div class="col-sm mb-3 mt-3" style="margin-right:-200px;">
									<?php echo "<a href='../Admin/file e-release/". $row['berita_release']. "' target='_blank' >"; ?>
										<img src="../Admin/file e-release/<?php echo $row['foto_release']; ?>" width="350" height="290" style='margin-top:10px;'/>
									</a>
								</div>
								<div class="col-lg mb-3 mt-3" style="margin-left:-200px; padding-top:15px;">
									<table class="table table-striped table">
										<tbody>
											<tr>
												<td>Tanggal</td>
												<td colspan="5"><?php echo $row['tanggal'].'-'. $row['bulan'].'-'. $row['tahun']; ?></td>
											</tr>
											<tr>
												<td>Judul</td>
												<td colspan="5"><?php echo $row['judul']; ?></td>
											</tr>
											<tr>
												<td>Foto Release</td>
												<td><?php echo "<a href='../Admin/file e-release/". $row['foto_release']. "' target='_blank'>".  $row['foto_release']."</a>"; ?></td>
											</tr>
											<tr>
												<td>Berita Release</td>
												<td><?php echo "<a href='../Admin/file e-release/". $row['berita_release']. "' target='_blank'>".  $row['berita_release']."</a>"; ?></td>
											</tr>
											<tr>
												<td>Penulis</td>
												<td colspan="5"><?php echo $row['penulis']; ?></td>
											</tr>
											<tr>
												<td>Photografer</td>
												<td colspan="5"><?php echo $row['photografer']; ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php else : ?>
					<hr class="my-4">
					<h2 class="font-weight-bold text-center">Tidak ada data yang bisa ditampilkan</h2>
				<?php endif; ?>
			<?php else: ?>
				<?php die(mysqli_error($link)); ?>
			<?php endif; ?>
			<?php mysqli_close($link); ?>
		<?php else: ?>
			<?php $sql = "SELECT * FROM eRelease"; ?>
			<?php if ($result = mysqli_query($link, $sql)): ?>
				<?php if(mysqli_num_rows($result) > 0): ?>
					<div class="container bg-light">
						<?php while ($row = $result->fetch_assoc()): ?>
							<div class="row border">
								<div class="col-sm mb-3 mt-3" style="margin-right:-200px;">
									<?php echo "<a href='../Admin/file e-release/". $row['berita_release']. "' target='_blank' >"; ?>
										<img src="../Admin/file e-release/<?php echo $row['foto_release']; ?>" width="350" height="290" style='margin-top:10px;'/>
									</a>
								</div>
								<div class="col-lg mb-3 mt-3" style="margin-left:-200px; padding-top:15px;">
									<table class="table table-striped table">
										<tbody>
											<tr>
												<td>Tanggal</td>
												<td colspan="5"><?php echo $row['tanggal'].'-'. $row['bulan'].'-'. $row['tahun']; ?></td>
											</tr>
											<tr>
												<td>Judul</td>
												<td colspan="5"><?php echo $row['judul']; ?></td>
											</tr>
											<tr>
												<td>Foto Release</td>
												<td><?php echo "<a href='../Admin/file e-release/". $row['foto_release']. "' target='_blank'>".  $row['foto_release']."</a>"; ?></td>
											</tr>
											<tr>
												<td>Berita Release</td>
												<td><?php echo "<a href='../Admin/file e-release/". $row['berita_release']. "' target='_blank'>".  $row['berita_release']."</a>"; ?></td>
											</tr>
											<tr>
												<td>Penulis</td>
												<td colspan="5"><?php echo $row['penulis']; ?></td>
											</tr>
											<tr>
												<td>Photografer</td>
												<td colspan="5"><?php echo $row['photografer']; ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php else : ?>
					<hr class="my-4">
					<h2 class="font-weight-bold text-center">Tidak ada data yang bisa ditampilkan</h2>
				<?php endif; ?>
			<?php else: ?>
				<?php die(mysqli_error($link)); ?>
			<?php endif; ?>
			<?php mysqli_close($link); ?>
		<?php endif; ?>
		
	</body>
</html>