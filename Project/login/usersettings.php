<?php include 'loginheader.php';
include 'loginmenu.php';

session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'project';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$stmt = $con->prepare('SELECT password, email FROM users1 WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<?php
$a = $_SESSION['id'];
$query = "SELECT * FROM users1 WHERE id = $a";

echo '<div class="table-responsive">
      <table class="table table-bordered">
      <tr> 
          <th scope="col">First Name</th> 
          <th scope="col">Last Name</th> 
          <th scope="col">Email</th> 
          <th scope="col">Edit</th>
          <th scope="col">Remove</th>
      </tr>';


if ($result = $mysqli->query($query)) {
while ($row = $result->fetch_assoc()) {
    $id = $row["id"];
    $fname = $row["first_name"];
    $lname = $row["last_name"];
    $city = $row["email"];
 
    echo '<tr> 
            <td>'.$first_name.'</td> 
            <td>'.$last_name.'</td> 
            <td>'.$email.'</td>
          </tr>';
}
$result->free();
}
echo '</table>
</div>';

include 'loginfooter.php'; ?>