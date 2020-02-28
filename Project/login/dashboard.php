<?php include 'loginheader.php';
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>
<div class="navtainer">
<div class="container">
	<div class="topbar">
	<div class="row">
		<div class="col-sm-12">		
		<a href="../index.php"><img class="logo" src="../img/bmlogo.png" alt="Logo"></a>
		<div class="topnav-right">
		<nav class="navbar navbar-expand-lg navbar-light">  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
       <a href="">Browse Developers</a>
      </li>
      <li class="nav-item">
        <a href="">User Settings</a>
      </li>     
      <li class="nav-item">
        <a href="">Help</a>
      </li>
      <li class="nav-item">
        <a href="logout.php">Log out</a>
      </li>
	</div>
    </div>
  </div>
  </div>
  </div>
  </div> <!-- end of container -->
</div> <!-- end of navtainer -->
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
    <?php endif ?>
    
    <?php  if (isset($_SESSION['email'])) : ?>
    	<h3>Welcome<?php echo $_SESSION['email']; ?></h3>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
<?php include 'loginfooter.php'; ?>