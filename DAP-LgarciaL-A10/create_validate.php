<?php
  include('conection.php');
  $name = $_POST['name'];
  $author = $_POST['author'];
  $edition = $_POST['edition'];
  $year = $_POST['year'];
  $editorial = $_POST['editorial'];
  $isbn = $_POST['isbn'];
  $language = $_POST['language'];
  $pages = $_POST['pages'];
  $description = $_POST['description'];
  $code = $_POST['code'];


  // echo $_POST['name'].$_POST['author'].$_POST['edition']
  // .$_POST['year'].$_POST['editorial'].$_POST['isbn']
  // .$_POST['language'].$_POST['pages'].$_POST['description']
  // .$_POST['code'];
  mysqli_query($conection,"INSERT INTO books(id,name,author,edition,year,editorial,isbn,language,pages,description,code)
    VALUES (NULL,'$name','$author','$edition','$year','$editorial','$isbn','$language','$pages','$description','$code')");
  mysqli_close($conection);
 ?>
