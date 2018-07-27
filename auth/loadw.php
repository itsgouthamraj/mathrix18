<?php
include_once 'config.php';
if(isset($_POST['mid'])){
	$mid = $_POST['mid'];
	$query = "SELECT * FROM workshop WHERE mid='$mid'";
      $result = mysqli_query($conn,$query);
      $count = mysqli_num_rows($result);
      echo $count;
      $query = "SELECT * FROM event_registrations WHERE mid='$mid'";
      $result = mysqli_query($conn,$query);
      $count = mysqli_num_rows($result);
      echo $count;
}