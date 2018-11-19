<?php include('server1.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Complaint Form</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form class="montform" id="reused_form" method="post" action="complaint.php">
                            <?php include('errors.php'); ?>
                        <p class="name">
                            <input name="name" type="text" class="feedback-input" required placeholder="Name" id="name" />
                        </p>
                        <p class="email">
                            <input name="email" type="email" required class="feedback-input" id="email" placeholder="Email" />
                        </p>
                        <p class="text">
                            <textarea name="complaint" class="feedback-input" id="comment" placeholder="Complaint"></textarea>
                        </p>
                        <div class="submit">
                            <button type="submit" name="user_com" class="button-blue">SUBMIT</button>
                            <div class="ease"></div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>