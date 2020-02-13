<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" 

              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="css/index.css"> -->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php
        $scriptname = basename($_SERVER["PHP_SELF"]);
        if($scriptname == "about.php") { ?>
            <style>
            <?php include 'css/about.css'; ?>
            </style>
        <?php } else if ($scriptname == "index.php") {?>
            <style>
            <?php include 'css/index.css'; ?>
            </style>
        <?php } else if ($scriptname == "contact.php") { ?>
            <style>
            <?php include 'css/contact.css'; ?>
            </style>
        <?php }
        ?>
    </head>
<body>