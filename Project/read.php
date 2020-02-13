<?php
//Table
include 'includes/db.php'; 
$sql = "select * from test_t";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
    
echo "<table border=\"1\"><tr><th>ID</th><th>Name</th><th>email</th>
<th>company</th><th>phone number</th><th>letter</th><th>file name</th><th>service</th></tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>" . $row["id"] . "</td><td>". $row["name"]."</td> <td>". $row["email"] 
        
        ."</td><td>". $row["company"]. "</td><td>". $row["phone"]
        ."</td><td>". $row["letter"]."</td><td>". $row["file_name"]."</td>
        <td>". $row["service"]."</td></tr>";
    }
    echo "</table>";
}

else 
{
    echo "no results";
}


$conn->close();
?>