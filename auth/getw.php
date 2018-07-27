<?php
include_once 'config.php';

    $mid=$_GET['mid'];
    $s="SELECT name,id,clg,paid FROM work WHERE mid='$mid'";
    $r=mysqli_query($conn,$s);
    if($r->num_rows > 0){
        if($row=$r->fetch_assoc()){
            $j=json_encode($row);
            echo $j;
        }else {
            echo "mid not found";
        }
    }
    // $mid = $_GET['mid'];
    // $q1 = "SELECT * from workshop WHERE mid='$mid'";
    // $r1 = mysqli_query($conn,$q1);
    // $c = mysqli_num_rows($r1)
?>