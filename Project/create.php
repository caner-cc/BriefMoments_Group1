<?php include 'includes/db.php' ;

$name= htmlentities($_POST['name']);
$email=$_POST['email'];
$phone=$_POST['phone'];
$comp_name=$_POST['comp_name'];
$letter=null;
if(isset($_POST['letter'])){
$letter=$_POST['letter'];
}
$service="";
if(isset($_POST['Design'])){
    $service=$service.$_POST['Design'];
}
if(isset($_POST['Frontend'])){
    $service=$service.$_POST['Frontend'];
}
if(isset($_POST['Backend'])){
    $service=$service.$_POST['Backend'];
}
/*$name = $_FILES['file1']['name'];
echo($_FILES['file1']['type']);
echo($_FILES['file1']['size']);*/
$filename=null;
if($_FILES && $_FILES['file1']['error']== UPLOAD_ERR_OK){
    $filename = $_FILES['file1']['name'];
    //echo($_FILES['file']['type']);
    //echo($_FILES['file']['size']);
   move_uploaded_file($_FILES['file1']['tmp_name'], 'tmp\\'.$filename);

}

$sql="insert into test_t (name,email,company, phone, letter, file_name, service) values ('$name','$email','$comp_name','$phone','$letter','$filename','$service')";
$result=$conn->query($sql);
if($result){echo "Data added!"."<br>";}
else{echo "Error!".$conn->error."<br>";}
echo "<a class=\"btn btn-secondary\" href=\"contact.html\">Going back</a>";




//echo "$fname";
/*$lname= $_POST['lname'];
$city= $_POST['city'];
$groupid= $_POST['groupid'];
$sql="insert into studentsinfo (fname, lname, city, groupid)
values('$fname', '$lname', '$city', '$groupid')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='update.php' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();*/

?>