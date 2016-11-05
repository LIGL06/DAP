<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  include('conection.php');

  $query = $conection->query("SELECT * FROM sessions WHERE username='$username' AND password='$password'");

  if ($result=mysqli_fetch_array($query)) {
    $_SESSION['username'] = $username;
    header('location: site.php');
  }else {
    header('location: login.php');
  }
 ?>
