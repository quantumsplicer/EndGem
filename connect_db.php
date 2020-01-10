<?php 
  //connect to database
  $conn = mysqli_connect('localhost', 'maanav', 'manuthebest', 'img_project' );
  if (!$conn){
      echo "error bro: " . mysqli_connect_error();
  }
?>