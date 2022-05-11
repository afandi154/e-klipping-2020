<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Member Login</title>
	
	<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
	<div class="login-form">
		<h1 class="font-weight-bold mt-5 text-center">Admin Login</h1>
		<hr class="my-4">
		<form action="" role="form" method="post" autocomplete="off">
			<div class="form-group">
				<label for="inputUsername">Username</label>
				<input type="text" class="form-control" id="inputUsername" name="inputUsername" aria-describedby="usernameHelp">
				<small id="usernameHelp" class="form-text text-muted">Harap Masukan Username yang telah terdaftar pada Database.</small>
			</div>
			<div class="form-group">
				<label for="InputPassword">Password</label>
				<input type="password" class="form-control" id="InputPassword" name="inputPassword">
			</div>
		
			<button type="submit" class="btn btn-primary btn-block" name="submit">LOGIN</button>
		</form>
	</div>
	<?php
	if(isset($_POST['submit'])) {
		//Format ('server', 'username', 'password', 'database')
		$link = mysqli_connect('localhost', 'root', '', 'test');
		$nama = $_POST['inputUsername'];
		$pass = $_POST['inputPassword'];
		
		$login = mysqli_query($link, "select * from login where (nama='$nama' and pass='$pass')");
		$cek = mysqli_num_rows($login);
		
		if($cek > 0){
			echo "<p class='text-center'>Login Success</p>";
			header("location:adminEklipingCetak.php");
		}else{
			echo "<p class='text-center'>Login Failed</p>";
			die(mysqli_error($link));
		}
		
		mysqli_close($link);
	}
 ?>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

