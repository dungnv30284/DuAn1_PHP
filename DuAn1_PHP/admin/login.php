<?php
session_start();
// ob_start();
require_once "../model/connection.php";
require_once "../model/user.php";

if (isset($_POST['submit']) && ($_POST['submit'])) {
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	$role = checkout($user, $pass);
	if ($role) {
		// kiem tra matj khau xem co dung khong
		if (password_verify($pass, $role['pass'])) {
			$_SESSION['role'] = $role;
			// $msg = "dang nhap thanh cong";
			header('location: index.php ');
			
		} else {
			$errors['pass'] = "mật khẩu không đúng";
		}
	} else {
		$errors['user'] = "tài khoản không đúng";
	}
}

?>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css2/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yinka Enoch Adedokun">
	<title>Login Page</title>
</head>

<body>
	<!-- Main Content -->
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo">
					<h2><span class="fa-solid fa-user"></span></h2>
				</span>
				<h4 class="company_title">Your Company Logo</h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>Log In</h2>
					</div>
					<div class="row">
						<form method="post" action="" control="" class="form-group">
							<div class="row">
								<input type="text" name="username" id="username" class="form__input" placeholder="Username">

							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="pass" id="password" class="form__input" placeholder="Password">
								<span style='color:red'><?php echo $errors['pass'] ?? '' ?> </span>

							</div>
							<div class="row">
								<input type="checkbox" name="remember_me" id="remember_me" class="">
								<label for="remember_me">Remember Me!</label>
							</div>
							<div class="row">
								<input name="submit" type="submit" value="Submit" class="btn"><br>
								<span style='color:red'><?php echo $errors['user'] ?? '' ?> </span>

							</div>
						</form>
					</div>
					<div class="row">
						<p>Don't have an account? <a href="#">Register Here</a></p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Footer -->

</body>