<?php include 'server.php';
include 'loginheader.php';
include 'menu.php';
?>
<div class="container">
<h2>Login</h2>
  <form method="post" action="login.php">
	  <?php include 'errors.php'; ?>
  	<div class="input-group">
  		<label>Username</label><br>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label> <br>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="../registerForm.php">Sign up</a>
  	</p>
  </form>
</div>
<?php include 'loginfooter.php';?>