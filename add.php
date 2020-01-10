<?php 
  //connect to database
  include('connect_db.php');

  if(isset($_POST["upload"]))
  {
      // upload file to the folder
      define ('SITE_ROOT', realpath(dirname(__FILE__)));
      $file_name= SITE_ROOT ."/uploads/".$_FILES["file"]["name"];
      move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);

      //update the database
      $title = mysqli_real_escape_string($conn, $_POST["title"]);
      $name = mysqli_real_escape_string($conn, $_FILES["file"]["name"]);
      $course = mysqli_real_escape_string($conn, $_POST["course"]);
      $sql = "INSERT INTO notes(title,actual_name,course) VALUES('$title','$name', '$course')";

      if(mysqli_query($conn,$sql)){
        //success

      }else{
        echo "ERROR: " .mysqli_error($conn);
      }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Add your notes!</title>
    <link rel="stylesheet" type="text/css" href="./add.css" />
  </head>
  <body>
  <a href="index.php"><div class="logo"><img src="./assets/notes.png" /></div></a>
  <div class="navbar_mainpage">
  </div>
  <div class="addmaterial_heading">Add Material</div>
  <div class="adding_notes_info">
      <form action="add.php" method="POST" enctype='multipart/form-data'>
        <select name="course" class="input_course_field">
            <option>Course 1</option> 
            <option>Course 2</option> 
            <option>Course 3</option> 
            <option>Course 4</option> 
        </select>
        <input type="text" class="input_title_field" name="title" placeholder="Title for your notes"/><br> 
        <label for="input_upload_field" class="input_upload_decoration" >
          </label> 
          <input type="file" id="input_upload_field" name="file"/><br>
        <?php 
          if(isset($_POST["upload"]))
          {
          if(empty($_POST["title"]))
          {
            
            ?>
            <p class="warning"> Don't leave the field empty!</p>
          <?php }else{
            ?>
            
            <?php
          }}?>  
        <input type="submit" class="input_submit_field" name="upload" value="Upload"></input> 
      </form>
  </div>
  </body>

