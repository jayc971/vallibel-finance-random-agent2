<?php

if (time() < strtotime('7 pm')) {
  echo '<script>alert("7 is not passed")</script>'; 
}else{
	echo '<script>alert("7 is passed")</script>'; 
}
 
?>