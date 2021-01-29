<?php
 
$image_folder = "images/days";

 
$today = date('l');
 
if (file_exists($image_folder."/".$today.".jpg")) {
 
  header('Location: ' . $image_folder.'/'.$today.'.jpg');
 
}
 
else {
 
  echo "No image was found for $today";
 
}
 
?>