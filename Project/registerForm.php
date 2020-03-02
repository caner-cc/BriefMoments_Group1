<?php
include 'includes/header.php';
include 'includes/menu.php';?>

<style>
    #registerform {
        padding: 2rem !important; 
    }
</style>

<div class="container" id="registerform">
<h2 class="display-4">Register as a new user</h2>
<form name="form1" method="post" action="createC.php" onsubmit="return validate(this)">
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

    if (document.form1.first_name.value == "") {
        alert( "Please provide your first name!" );
        document.form1.first_name.focus() ;
        return false;
    }
    if (document.form1.last_name.value == "") {
        alert( "Please provide your last name!" );
        document.form1.last_name.focus() ;
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
<?php
include 'includes/footer.php';?>