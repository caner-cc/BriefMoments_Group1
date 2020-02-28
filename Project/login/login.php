<?php include 'loginheader.php';
include 'loginmenu.php';
include('server.php'); ?>

<div class="container">
<h3>Log In</h3>
<div class="row">
  <div class="col-lg-6">
    <form class="form-vertical" name="form" method="post" action="login.php">
    <?php include('errors.php'); ?>
      <div class="form-group">
        <label for="email" class="control-label">Email</label>
        <input type="text" name="email" class="form-control" id="email">
      </div>
      <div class="form-group">
        <label for="password" class="control-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
      </div>
      <div class="form-group">
  		  <button type="submit" class="btn" name="login_user">Login</button>
  	  </div>
    </form>
  </div>
</div>
  <p>
  	Not yet a member? <a href="registerForm.php">Sign up</a>
  </p>
</div>
<?php include 'loginfooter.php'?>