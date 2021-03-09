<?php

$image_folder = "images";

if (time() < strtotime('12 pm')) {
  header('Location: ' . $image_folder.'/online.png');
}
 
?>