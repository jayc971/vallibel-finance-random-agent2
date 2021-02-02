<?php

header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
 
$image_folder = "images/days";

 
$today = date('l');
 
if (file_exists($image_folder."/".$today.".jpg")) {
 
  header('Location: ' . $image_folder.'/'.$today.'.jpg');
  die();
}
 
else {
 
  echo "No image was found for $today";
 
}
 
?>