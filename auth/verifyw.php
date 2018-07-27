<?php
include_once 'config.php';
    $mid=$_GET['mid'];
    $s1="UPDATE work set paid=1 where mid='$mid'";
    $s2="INSERT INTO meow values('$mid')";
    $s3="SELECT name,id,clg,paid FROM work WHERE mid='$mid'";
    $r1=mysqli_query($conn,$s1);
    $r2=mysqli_query($conn,$s2);
    $r3=mysqli_query($conn,$s3);
    if($r3->num_rows >0){
        if($row=$r->fetch_assoc()){
            $j=json_encode($row);
            echo $j;
        }else{
            echo "mid not found";
        }
    }
?>