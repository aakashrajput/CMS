<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"cms");

if($link) {
  echo "db is connected";
} else {
  echo "db connection error";
}
?>
