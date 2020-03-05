
<?php 
include 'includes/header.php';
include 'includes/menu.php';
include 'includes/db.php';

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
  $user = $_POST['username'];
  $e = $_POST['email'];
  $pw = $_POST['password'];

  $query = mysqli_query($conn, "SELECT * FROM customers where username='$user'");
if(mysqli_num_rows($query) > 0) {
    echo 'Username already exists!';
} else {
    mysqli_query($conn, "insert into customers (username, email, password, date)
    values ('$user', '$e', '".md5($pw)."', now())");?>
    <script>
        window.location.replace("login/login.php");
    </script>
<?php
}
}?>
<style>
        #registerform {
        padding: 2rem !important; 
    }
    @font-face { font-family: 'Roboto'; src: url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap'); }
    .bottom {
	position:absolute;
	bottom: 0%;
	width: 100%;
}
.w {
    width: 60%;
}
h1
{
	color:#505A6B;
}
.btn {
    margin-bottom: 20px;
}
</style>

<div class="container" id="registerform">
<h1 class="display-4">Register as a new user</h1>
<form name="form1"style="width: 60%" method="post" action="registerForm.php" onsubmit="return validate(this)">
<div class="form-row">
<div class="col">
Username:<br> <input type="text" name="username" class="form-control"><br>
</div>
</div>
<div>
Email:<br> <input type="email" name="email" class="form-control"><br>
</div>
<div>
Password:<br> <input type="password" name="password" class="form-control"><br>
</div>
<br>
<button type="submit" class="btn btn-primary">Register Now</button>
<p>
    Already a member? <a href="login/login.php">Log in</a>
</p>
</form>
</div>

<script type ="text/javascript">

function validate() {

    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

  
    if (document.form1.username.value == "") {
        alert( "Please provide a username!" );
        document.form1.username.focus() ;
        return false;
    }
    if (document.form1.email.value == /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value))
    {
        alert("You have entered an invalid email address!")
        return false;
    }
    if( document.form1.password.value == "") {
        alert("Please provide a password!");
        return false;
    } else if (document.form1.password.value != "") { 
        if(document.form1.password.value.match(passw)) 
        {
            return true;
        }
        else
        { 
            alert('Your password is missing one of the following: 6 to 20 characters, contain at least one numeric digit, one uppercase and one lowercase letter')
            return false;
        }
    }
    return( true );
   }

function CheckPassword(inppass) 
{ 
var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
if(inputtxt.value.match(passw)) 
{ 
alert('correct')
return true;
}
else
{ 
alert('Your password is missing one of the following: 6 to 20 characters, contain at least one numeric digit, one uppercase and one lowercase letter')
return false;
}
}

</script>
<div class="bottom">
<?php
include 'includes/footer.php';?>
</div>