<?php include 'server.php';
include 'loginheader.php';
include 'menu.php';
?>
<div class="container">
	<form method="post" action="login.php">
	<?php include 'errors.php'; ?>
	<h2>Login</h2>
	<div class="form-row">
		<div class="col-6-sm">
			Username:<br> <input type="text" name="username" class="form-control">
		</div>
	</div>
	<div class="form-row">
		<div class="col-6-sm">
			Password:<br> <input type="password" name="password" class="form-control"><br>
		</div>
	</div>
	<button type="submit" class="btn" name="login_user">Login</button>
  	<p>
  		Not yet a member? <a href="../registerForm.php">Sign up</a>
  	</p>
</div>
<?php include 'loginfooter.php';?>