<?php 
include 'loginheader.php';
include 'loginmenu.php';
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h2>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h2>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
		<div class="container" >
    	<p style="padding-top: 20px; text-align: center">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p style="padding-top: 20px; text-align: center"> <a href="../index.php?logout='1'" style="color: blue;">Log Out</a> </p>
		</div>
    <?php endif ?>
</div>
<div style="position: absolute; bottom: 0%; width: 100%">
<?php include 'loginfooter.php'; ?>
</div>
</body>
</html>