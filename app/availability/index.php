<?php

$image_folder = "images";

if (time() < strtotime('11:30 am')) {
  header('Location: ' . $image_folder.'/online.png');
}
 
?>