<?php
//create new user 
include 'includes/db.php';
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

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.input{
width:400px;
}
div{margin:20px;
}
input{
float:right;
}
</style>
</head>
<body style="background:#41e122">
<div style="background:#AFEEEE">
<h3>Create user</h3>
<form method="POST">
<div class="input">
<label>Enter login</label><input type="text" name="login" size="30"/></div>
<div class="input">
<label>Enter password</label><input type="password" name="password" size="30"/>
</div>
<button id="btn">Done</button>
</form>
<div>

</div>
<div id="response"style="color:blue">
</div>
</div>

</body>

</html>