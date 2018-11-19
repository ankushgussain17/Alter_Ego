<?php
session_start();
error_reporting(0);

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['trace'])) {
  $id = mysqli_real_escape_string($db, $_POST['id']);
 

  if (empty($id)) {
    array_push($errors, "Post Id is required");
  }
 

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM tnt WHERE id='$id'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: traceNtrack1.php');
    }else {
      array_push($errors, "You Entered Wrong Post Id");
    }
  }
}




?>