<link rel="stylesheet" href="css/appsent.css">
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="css/index.css"> -->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include "includes/menu.php" ?>
<script>
    //dropdown menu
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });

</script>
<div class="con">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="msg">Your application has been successfully sent!</p>
                <?php header('Refresh: 6; "about.php"'); 
                ?> 
                <p id="countdown" class="countdown"></p>
                <script>
                    var timeleft = 5;
                    var downloadTimer = setInterval(function(){
                        if(timeleft <= 0){
                        clearInterval(downloadTimer);
                        } else {
                        document.getElementById("countdown").innerHTML = timeleft + " seconds remaining until redirect to the previous page";
                        }
                        timeleft -= 1;
                        }, 1000);
                </script>
            </div>
        </div>
    </div>
</div>
</body>
<?php include "includes/footer.php" ?>