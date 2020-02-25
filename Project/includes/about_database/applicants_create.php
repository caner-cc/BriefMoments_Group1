<?php include 'db.php';

$f = $_POST['first_name'];
$l = $_POST['last_name'];
$a = $_POST['age'];
$c = $_POST['city'];
$d = $_POST['department'];

$statusMsg = '';
$targetDir = "applicants_images/";
$fileName = basename($_FILES["file"]["name"]);


if(isset($_POST['submit']) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $fileType = mime_content_type($_FILES["file"]["tmp_name"]);
    if(preg_match('/image\//', $fileType)){
        preg_match('/image\/\K\S+/', $fileType, $fileExtension);
        // Upload file to server
        for ($i = 0; $i < 1000; $i++) {
            # Attempt to generate a unique filename
            $fileName = md5(rand() . substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 30) . rand()) . "." . $fileExtension[0];
        
            # We don't have to keep trying if this file does not exist
            $targetFilePath = $targetDir . $fileName; 
            if (!file_exists($targetFilePath)) {
                break;
            }
        }
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database 
            $sql = "insert into applicants (first_name, last_name, age, city, department, file_name)
            values ('$f', '$l', '$a', '$c', '$d', '$fileName')";
            if($conn->query($sql) === TRUE){
                header("Location: ../../appsent.php");
            }else{
                echo "ERROR: " .$sql. "<br>" . $conn->error;
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;

$conn->close();

?>