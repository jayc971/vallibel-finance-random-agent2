<?php
 
$image_folder = "names/days";

 
$today = date('l');
 
if (file_exists($image_folder."/".$today.".jpg")) {
 
  header('Location: ' . $image_folder.'/'.$today.'.jpg');
  die();
}
 
else {
 
  echo "No image was found for $today";
 
}
 
?>