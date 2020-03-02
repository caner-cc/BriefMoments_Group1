<?php
//authorization  + function
include 'header.php';
include '../includes/db.php';

if (isset($_POST["login"])&&isset($_POST["password"])) {
	$login=htmlentities($_POST["login"]);
    $password=htmlentities($_POST["password"]);
    $sql="select * from users where login='$login'";
    $role;
$result=$conn->query($sql);
if(!$result){echo "User don't exist";}
else{
   
    while($row = $result ->fetch_assoc()){
        if( $password==$row['password']){

        $role=$row['role'];
        echo "Hello "."<strong>".$role."</strong>";
        create_data($role, $conn);}
        else{
            echo "Wrong data entered!";
        }
    }

}

}
if (isset($_POST["id"])) {
$id=$_POST["id"];
$sql="delete from test_t where id='$id'";
$result = $conn->query($sql);
if($result){echo "String is deleted";}
else{
    echo "cant delete";
}
create_data('admin', $conn);

}



function create_data($role, $conn){
$sql = "select * from test_t order by name";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
    
echo "<table border=\"1\"><tr><th>ID</th><th>Name</th><th>email</th>
<th>company</th><th>phone number</th><th>letter</th><th>file name</th><th>service</th></tr>";
    while($row = $result ->fetch_assoc()){
       $str;
       if($role=="user"){
       $str="<tr><td>" . $row["id"] . "</td><td>". $row["name"]."</td> <td>". $row["email"] 
        ."</td><td>". $row["company"]. "</td><td>". $row["phone"]
        ."</td><td>". $row["letter"]."</td><td>". $row["file_name"]."</td>
        <td>". $row["service"]."</td></tr>";
        
        echo $str;}
        else if($role="admin"){
            $str="<tr><form method=\"POST\">
            <td><input type=\"text\" name=\"id\" readonly=\"true\" value=".$row["id"]."></td>
            <td><input type=\"text\" name=\"name\" value=". $row["name"]."></td>
            <td><input type=\"text\" name=\"email\" value=". $row["email"] ."></td>
            <td><input type=\"text\" name=\"company\" value=". $row["company"]. "></td>
            <td><input type=\"text\" name=\"phone\" value=". $row["phone"]."></td>
            <td><input type=\"text\" name=\"letter\" value=". $row["letter"]."></td>
            <td><input type=\"text\" name=\"file_name\" value=". $row["file_name"]."></td>
            <td><input type=\"text\" name=\"service\" value=". $row["service"]."></td>
            <td><input type=\"submit\" value=\"edit\"></td>
            <td><input type=\"submit\" value=\"delete\"></td>
            </form></tr>";
            echo $str;
          
        }


    }
    echo "</table>";
}

else 
{
    echo "no results";
}
if($role=="admin"){
    echo "<a href=\"createuser.php\">Create user </a>";
}

}

?>
<?php include '../includes/footer.php';?>



