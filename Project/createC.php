<?php include 'includes/db.php';
include 'includes/header.php';
include 'includes/menu.php';

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$e = $_POST['email'];
$p = $_POST['password'];
$pw = md5($p);

$sql = "insert into users1 (email, password, first_name, last_name, date)
values ('$e', '$pw', '$first', '$last', now())";

if ($conn->query($sql) === TRUE){ ?>
    <div class="container">
    <div class="row">
		<div class="col-sm-8 textpad">		
		<h2 class="display-4 ">You have successfully registered</h2>
		<div class="whitet1">
		<p><a href="index.php">Go back</a></p></div>
		</div>
    </div>
    </div>
<?php }
else
{
    echo "ERROR: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php include 'includes/footer.php'?>