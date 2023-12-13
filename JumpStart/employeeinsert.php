<?php
session_start();

// initializing variables
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost:3307', 'root', '', 'jumpstartdb');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $confirmpassword) {
    array_push($errors, "The two passwords do not match");
  }

	//Validate form using javascript
    echo '<script src="myscripts.js"></script>';
    echo '<script type="text/javascript">validateForm2(event);</script>';

  // first check the database to make sure 
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM employeeregistration WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) {
    array_push($errors, "Email already exists");
    echo "Email already exists";
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    // encrypt the password before saving in the database
    $password = md5($password);

    $query = "INSERT INTO employeeregistration (email, password) 
              VALUES('$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now registered and logged in";
    header('location: EmployeeLogin.php');
  }
}

// LOGIN EMPLOYEE
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM employeeregistration WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../JumpStart/Employee_Website/employeeHomepage.html');
  	}else {
      header('location: EmployeeLogin.php');
  	}
  }
}
?>
