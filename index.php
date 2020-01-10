<?php 
  //connect to database
  include('connect_db.php');

  $sql='SELECT * FROM notes';
  $result = mysqli_query($conn , $sql);
  $all_notes = mysqli_fetch_all($result ,MYSQLI_ASSOC);
  mysqli_free_result($result);
  
  $sql1='SELECT * FROM notes ORDER BY id DESC' ;
  $result1 = mysqli_query($conn , $sql1);
  $all_notes1 = mysqli_fetch_all($result1 ,MYSQLI_ASSOC);
  
  mysqli_free_result($result1);
  mysqli_close($conn); 

  

  // print_r($all_notes);
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>EndGem project</title>
    <link rel="stylesheet" type="text/css" href="./test.css" />
    <script type="text/javascript" src="./index.js" ></script>

  </head>
  <body>
  <div id="mySidebar" class="sidebar">
    <?php foreach($all_notes1 as $notes_1) { ?>
  <div class="sidebar_singlenote">
    <a href="#" style="width:500px">
      <div class="sidebar_singlenote_image_container">
      <img src="./assets/Vector.png" class="sidebar_singlenote_image"/>
      </div>
      <div class="sidebar_singlenote_title" style="padding-left: 10px">
        <?php echo htmlspecialchars($notes_1['title']); ?>
      </div>
      <div class="sidebar_singlenote_downloads" style="display:flex; justify-content:flex-end">
        <?php echo htmlspecialchars($notes_1['no_of_downloads']); ?>
        Downloads
      </div>
    </a>
  </div>
  <?php } ?>
</div>
    <a href="index.php"><div class="logo"><img src="./assets/notes.png" /></div></a>
    <div class="navbar_mainpage">
      <div class="courselist">
        <div class="course">
          Course 1
        </div>
        <div class="course">
          Course 2
        </div>
        <div class="course">
          Course 3
        </div>
        <div class="course">
          Course 4
        </div>
      </div>
      <a href="add.php"><div class="add_plus_logo">
        <div class='horizontal-plus'></div>
        <div class='vertical-plus'></div>
      </div></a>
      <a href="#"><div class="add_3bar" onclick="openNav()">
        <div class="single_bar"></div><br>
        <div class="single_bar"></div><br>
        <div class="single_bar"></div>
      </div>
    </a>
    </div>
    <div class="all_notes_displayed">

    <?php foreach($all_notes as $notes_1){ ?>  
    <a download="<?php echo htmlspecialchars($notes_1["actual_name"])?>" href="uploads/<?php echo htmlspecialchars($notes_1["actual_name"])?>"><div class="display_notes">
        <img src="assets/pdf.svg" />
        <div class="notes_name">
          
            <?php echo htmlspecialchars($notes_1['title']); ?><br />
          
          Date of upload: <?php echo htmlspecialchars($notes_1['date']) ?> 
        </div>
        <div class="nod_display">No. of Downloads: <?php echo htmlspecialchars($notes_1['no_of_downloads']) ?></div>
      </div>
    </a>
      <?php } ?>
    </div>
  </body>
</html>
