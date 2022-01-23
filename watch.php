<?php
  function getsrc() {
    if(isset($_GET['name'])) {
      $src = $_GET['name'];
    }
    
    echo $src;
  }
?>

<video width="1280" height="720" controls>
  <source src="./OBS_Studio/<?php getsrc(); ?>">
  Your browser does not support the video tag.
</video>
