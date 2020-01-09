<?php 
  if(isset($_POST["upload"]))
  {
      // $files = $_FILES["file"];
      define ('SITE_ROOT', realpath(dirname(__FILE__)));
      $file_name= SITE_ROOT ."/uploads/".$_FILES["file"]["name"];
      move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Add your notes!</title>
    <link rel="stylesheet" type="text/css" href="./add.css" />
  </head>
  <body>
  <div class="logo"><img src="./assets/notes.png" /></div>
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

