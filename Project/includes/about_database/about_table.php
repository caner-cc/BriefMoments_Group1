<?php
include 'db.php'; 
$sql = "select * from employees";
$result = $conn->query($sql);
$firstnames = array();
$lastnames = array();
$departments = array();

/*
for($i=0; $i<count($imgsources); $i++) {
echo '<img src="'.$imgsources[$i].'">';
}
*/
$sql = "select * from applicants where accepted = TRUE";
$imgsources = array(

);

if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.

    while($row = $result ->fetch_assoc()){ ?>
    <?php $firstnames[] = $row["first_name"];
    $lastnames[] = $row["last_name"];
    $departments[] = $row["department"];
    $imgsources[] = $row["file_name"];
}
}
?>
