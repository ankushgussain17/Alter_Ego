<?php include('server2.php') ?>
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
        <h2 align="center" style="font-family: 'Montserrat', Arial, Helvetica, sans-serif; width:100%; height:100%; position: absolute; top: 200px;">Trace your order or parcel/post</h2>
        <div class="wrap">
   <div class="search">
    <form  method="post" action="traceNtrack.php">
        <?php include('errors.php'); ?>
      <input type="text" name="id" class="searchTerm" placeholder="Enter your post id.....">
      <button type="submit" name="trace" class="searchButton">
       <img src="images/searchicon.png" style="width: 125%; height: 100%">
     </button>
   </div>
</div>
</form>
    </body>
</html>