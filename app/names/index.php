<?php
 
$image_folder = "images/days";

 
$today = date('l');
 
if (file_exists($image_folder."/".$today.".png")) {
 
  header('Location: ' . $image_folder.'/'.$today.'.png');
  die();
}
 
else {
 
  echo "No image was found for $today";
 
}
 
?>