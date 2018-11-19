<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trace and Track</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="trace.css" >
        <script src="form.js"></script>
    </head>
    <body >
       
                    
                       <?php  if (isset($_SESSION['id'])) : ?>    
                        <p class="name" style="color: red;">
                           Your Post is at <?php echo $_SESSION['location']; ?></strong>
                        </p>
                    <?php endif ?>
                       
                    
                    
                
    </body>
</html>