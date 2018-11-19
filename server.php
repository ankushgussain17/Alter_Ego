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
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
   $country = mysqli_real_escape_string($db, $_POST['country']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
     $city = mysqli_real_escape_string($db, $_POST['city']);
      $pin = mysqli_real_escape_string($db, $_POST['pin']);
       $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($country)) { array_push($errors, "country is required"); }
  if (empty($state)) { array_push($errors, "State is required"); }
  if (empty($city)) { array_push($errors, "City is required"); }
  if (empty($pin)) { array_push($errors, "Pin Code is required"); }
  if (empty($dob)) { array_push($errors, "Date Of Birth is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, address, country, state, city, pin, dob,email, password_1,password_2) 
  			  VALUES('$username', '$address', '$country' , '$state' , '$city' , '$pin' , '$dob' , '$email', '$password', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password_1='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index1.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>