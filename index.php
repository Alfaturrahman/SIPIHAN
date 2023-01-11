<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="style/style01.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
	<title>Login SIPIHAN</title>
</head>

<body class="begimg">
	<div class="beg"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">
				</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-7 col-lg-5">
				<div class="login-wrap p-4 p-md-5">
					<?php
            if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-info-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                    echo '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
                echo '</svg>';
						echo 'Username Atau Password Salah';
                echo '</div>';
            }
            }
        ?>
					<div class="mb-5 text-center rounded">
						<img src="img/logo m.png" height="150px">
					</div>
					<form action="cek_login.php" method="POST" class="login-form">
						<div class="form-group">
							<input type="text" name="username" class="form-control rounded-left" placeholder="Username"
								required>
						</div>
						<div class="form-group d-flex">
							<input type="password" name="password" class="form-control rounded-left"
								placeholder="Password" required>
						</div>
						<div class="form-group">
							<input type="submit" class="form-control btn btn-secondary rounded submit px-3"
								value="Login">
						</div>
						<div class="form-group d-md-flex">
							<div class="w-50 mt-2">
								<label class="checkbox-wrap checkbox-light">Remember Me
									<input type="checkbox" checked>
									<span class="checkmark"></span>
								</label>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.6.1.min.js"></script>
</body>

</html>