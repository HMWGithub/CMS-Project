<?php
  $connection = mysqli_connect('localhost', 'root', '', 'login_app');
  if ($connection){
    echo "connection successful";
  } else {
    die("connection failed");
  }

?>