<?php
  function displayAll() {
    $videos = glob('./OBS_Studio/*');
    foreach($videos as $video) {
      $name = str_replace('./OBS_Studio/', '', $video);
      if(strcmp(mb_substr($name,-4,4),".jpg") == 0) {
        continue;
      }
      echo "<li><a href=\"watch.php?name=" . $name . "\">" . $name . "</a></li>";
    }
  }
?>
<h3><a href="#bottom">ページの下へ移動</a></h3>
<ul>
  <?php displayAll(); ?>
</ul>
<div id="bottom"></div>
