<?php include 'server.php';
include 'loginheader.php';
include 'menu.php';
?>
<div class="container" id="registerform">
	<form method="post" action="login.php">
	<?php include 'errors.php'; ?>
	<p><h1 class="display-4">Login</h1><p>
	<div class="form-row" style="margin-top: 20px;">
		<div class="col-6-sm">
			Username:<br> <input type="text" name="username" class="form-control">
		</div>
	</div>
	<div class="form-row">
		<div class="col-6-sm" style="margin-top: 20px;">
			Password:<br> <input type="password" name="password" class="form-control"><br>
		</div>
	</div>
	<button type="submit" class="btn" name="login_user">Login</button>
  	<p>
  		Not yet a member? <a href="../registerForm.php">Sign up</a>
  	</p>
</div>
<div class="bottom">
<?php include 'loginfooter.php';?>
</div>