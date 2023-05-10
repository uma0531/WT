<?php
session_start();

// Set the correct username and password here
$correct_username = 'uma';
$correct_password = 'uma';

// Check if the user has submitted the form
if (isset($_POST['submit']))
 {
  // Get the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the username and password are correct
  if ($username == $correct_username && $password == $correct_password)
 {
    // Reset the login attempts counter
    $_SESSION['login_attempts'] = 0;

    // Set a session variable to indicate that the user is logged in
    $_SESSION['logged_in'] = true;

    // Display the welcome message
    echo 'Welcome, ' . $username . '!';
  } 
 else
 {
    // Increment the login attempts counter
    $_SESSION['login_attempts'] = ($_SESSION['login_attempts'] ) + 1;

    // Check if the user has exceeded the maximum login attempts
    if ($_SESSION['login_attempts'] >= 3) 
    {
      // Display the error message
      echo 'You have exceeded the maximum login attempts. Please try again later.';
    }
 else 
{
      // Display a message indicating that the login credentials are incorrect
      echo 'Incorrect username or password. Please try again.';

      // Display the login form again
      include 'login.html';
    }
  }
}
 else {
  // Display the login form for the first time
  include 'login.html';
}
?>
