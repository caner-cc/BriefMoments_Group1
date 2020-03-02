<!-- ENTER form-->
<?php include 'header.php'; ?>

<div class=container>
<h2>Enter</h2>
<form method="POST" action="auth.php">
<div class="input">
<label>Enter your login</label><br><input type="text" name="login" size="30"/></div>
<div class="input">
<label>Enter your password</label><br><input type="password" name="password" size="30"/>
</div>
<br>
<button id="btn" class="btn btn-primary">Done</button>
</form>


<p></p>
<a href="../index.php"><button id="btn" class="btn btn-primary">Back</button></a>
<div id="response"style="color:blue">
</div>
</div>
<br>
<?php include '../includes/footer.php'; ?>