<!-- ENTER form-->
<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<div class=container id="registerform">
<p><h1 style="color: #505A6B !important;" class="display-4">Enter</h1></p>
<form method="POST" action="auth.php">
<div class="form-row" style="margin-top: 20px;">
<div class="col-6-sm">
<label>Enter your login</label><br><input type="text" name="login" size="30" class="form-control"/></div>
</div>
<div class="form-row" style="margin-top: 20px;">
<div class="col-6-sm">
<label>Enter your password</label><br><input type="password" name="password" size="30" class="form-control"/>
</div>
</div>
<br>
<button id="btn" class="btn btn-primary">Done</button>
</form>


<p></p>
<a href="../index.php"><button id="btn" class="btn btn2 btn-primary">Back</button></a>
<div id="response"style="color:blue">
</div>
</div>
<br>
<div style="position: absolute; bottom: 0%; width: 100%">
<?php include '../includes/footer.php'; ?>
</div>
</div>