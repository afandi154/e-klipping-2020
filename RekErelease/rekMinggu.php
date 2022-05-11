<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
    <title>HUMAS SETDA Bekasi</title>
  </head>
	<style type="text/css">
		 h2 {
			padding-top: 10%;
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
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Rekapitulasi E-Release<span class="sr-only">(current)</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="rekMinggu.php">Perminggu</a>
								<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="rekBulan.php">Perbulan</a>
								<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="rekTahun.php">Pertahun</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	
	<?php
		//Format ('server', 'username', 'password', 'database')
		$link = mysqli_connect('localhost', 'root', '', 'test');
		if(!$link) { die(mysqli_error($link)); }
		
		$sql = "SELECT * FROM ( SELECT * FROM eRelease ORDER BY tanggal DESC LIMIT 7 ) var1 ORDER BY tanggal ASC";
	?>
	<h2 class="font-weight-bold text-center">Rekapitulasi E-Release Perminggu</h2>
	<div class="container">
		<?php if ($result = mysqli_query($link, $sql)): ?>
			<?php if(mysqli_num_rows($result) > 0): ?>
				<table class="table">
				  <thead class="thead-dark">
					<tr>
					  <th scope="col">Foto Release</th>
					  <th scope="col">Berita Release HUMAS</th>
					  <th scope="col">Tanggal Release</th>
					  <th scope="col">Judul Release</th>
					  <th scope="col">Penulis</th>
					  <th scope="col">Pothografer</th>
					</tr>
				  </thead>
				  <tbody>
					<?php while ($row = $result->fetch_assoc()): ?>
						<tr>
							<td><?php echo "<a href='../Admin/file e-release/". $row['foto_release']. "' target='_blank'> Foto Release </a>"; ?></td>
							<td><?php echo "<a href='../Admin/file e-release/". $row['berita_release']. "' target='_blank'> Berita Release </a>"; ?></td>
							<td><?php echo $row['tanggal'].'-'. $row['bulan'].'-'. $row['tahun']; ?></td>
							<td><?php echo $row['judul']; ?></td>
							<td><?php echo $row['penulis']; ?></td>
							<td><?php echo $row['photografer']; ?></td>
						</tr>
					<?php endwhile; ?>
				  </tbody>
				</table>
			<?php else : ?>
				<hr class="my-4">
				<h2 class="font-weight-bold text-center">Maaf, Tidak Ada Data Untuk Minggu ini </h2>
				<?php endif; ?>
		<?php else: ?>
			<?php die(mysqli_error($link)); ?>
		<?php endif; ?>
	</div>
	<?php mysqli_close($link); ?>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>