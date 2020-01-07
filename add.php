

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
      <form action="add.php" method="POST">
        <select name="course" class="input_course_field">
            <option>Course 1</option> 
            <option>Course 2</option> 
            <option>Course 3</option> 
            <option>Course 4</option> 
        </select>
        <input type="text" class="input_title_field" name="title" placeholder="Title for your notes"/><br> 
        <?php 
          if(isset($_POST["submit"]))
          {
          if(empty($_POST["title"]))
          {
            
            ?>
            <p class="warning"> Don't leave the field empty!</p>
          <?php }else{
            ?>
            
            <?php
          }}?>  
        <input type="submit" class="input_submit_field" name="submit"></input> 
      </form>
  </div>
  </body>

