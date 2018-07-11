<!DOCTYPE HTML>
<html>

	<head>
		<title>Rental Mobil</title>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" 
		href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" 
		type="text/css">

	</head>
<body style="background: url(<?php echo base_url();?>assets/pth.jpg)">
		<div class="box-login clear-fix" style="width:230px; margin:50px auto;">
			<h1 class="text-center"><font color="white">Rental Mobil</font></h1>
			<h2 class="text-center"><font color="white">Please Login</font></h2>
			<h3 class="text-center"><font color="white">Pleaseee</font></h3>
			<h4 class="text-center"><font color="white">Tulung Lah</font></h4>
			<h5 class="text-center"><font color="white">Ayo lah tulung lah</font></h5>
			<h6 class="text-center"><font color="white">ndang to</font></h6>
			<form action="<?php echo base_url(); ?>index.php/login/cek" method="POST">
				<div class="form-group">
					<font color="white"><label>Username</label></font>
					<input type="text" class="form-control" name="username" required>
				</div>
				<div class="form-group">
					<font color="white"><label>Password</label></font>
					<input type="password" class="form-control" name="password" required>
				</div>
				<div class="form-group text-center">
					<input type="submit" class="btn btn-danger btn-md" value="Login">	
				</div>
			</form>
		</div>
	</body>
</html>