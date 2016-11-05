<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  include('conection.php');
  $md5User = md5($username);
  $md5Pass = md5($password);

  mysqli_query($conection,"INSERT INTO `sessions`(`id`, `username`, `password`) VALUES (null,'$md5User','$md5Pass')");
  mysqli_close($conection);
  $_SESSION['username'] = $username;
?>
