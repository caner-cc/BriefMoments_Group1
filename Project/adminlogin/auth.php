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
if (isset($_POST["id"])&&isset($_POST["del"])) {
    $id=$_POST["id"];
    $sql="delete from test_t where id='$id'";
    $result = $conn->query($sql);
    if($result){echo "String is deleted";}
    else{
        echo "cant delete";
    }
    create_data('admin', $conn);
    
    }
    if (isset($_POST["id"])&&isset($_POST["ed"])) {
        $id=$_POST["id"];
        $name=$_POST["name"];
        $email=$_POST["email"];
        $company=$_POST["company"];
        $phone=$_POST["phone"];
        $letter=$_POST["letter"];
        $file_name=$_POST["file_name"];
        $service=$_POST["service"];
    
    
        $sql="update test_t set
        name='$name',
        email='$email',
        company='$company',
        phone='$phone',
        letter='$letter',
        file_name='$file_name',
        service='$service'
        where id='$id'";
        $result = $conn->query($sql);
        if($result){echo "String is edited";}
        else{
            echo "cant edit";
        }
        create_data('admin', $conn);
        
        }



function create_data($role, $conn){
$sql = "select * from test_t order by name";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
    
echo "<table  ><tr><th>ID</th><th>Name</th><th>email</th>
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
            <td><input type=\"submit\" name=\"ed\" value=\"update\"></td>
            <td><input type=\"submit\" name=\"del\" value=\"delete\"></td>
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
// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 

$conn->close();
    ?>
    </tbody>
</table>
<div style="position: absolute; bottom: 0%; width: 100%">
<?php include '../includes/footer.php';?>
</div>



