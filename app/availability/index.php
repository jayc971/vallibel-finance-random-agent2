<?php

$image_folder = "images";

if (time() < strtotime('10:30 am')) {
  header('Location: ' . $image_folder.'/online.png');
}else{
	echo '<script>alert("7 is passed")</script>'; 
}
 
?>