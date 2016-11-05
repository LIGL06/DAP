<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  include('conection.php');
  $md5User = md5($username);
  $md5Pass = md5($password);

  $query = $conection->query("SELECT * FROM sessions WHERE username='$md5User' AND password='$md5Pass'");

  if ($result=mysqli_fetch_array($query)) {
    $_SESSION['username'] = $username;
    header('location: site.php');
  }else {
    header('location: signup.php');
  }
 ?>
