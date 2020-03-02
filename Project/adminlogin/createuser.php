<?php
include 'header.php';
//create new user 

include '../includes/db.php';
if (isset($_POST["login"])&&isset($_POST["password"])) {
	$login=htmlentities($_POST["login"]);
    $password=htmlentities($_POST["password"]);
    $sql="insert into users (login, password, role) values('$login','$password','user')";
    $result=$conn->query($sql);
    if($result){echo "User added!";}
    else{
        echo "SOmething went wrong!".$conn->error;
    }
}
?>
<div class="container">
<h2>Create user</h2>
<form method="POST">
<div class="input">
<label>Enter login</label><br><input type="text" name="login" size="30"/></div>
<div class="input">
<label>Enter password</label><br><input type="password" name="password" size="30"/>
</div>
<br>
<button id="btn" class="btn btn-primary">Done</button>
</form>
<p></p>
<a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
</div>


<div>

</div>
<div id="response"style="color:blue">
</div>
</div>

<br>
<?php include '../includes/footer.php'; ?>