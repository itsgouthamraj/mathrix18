<?php
include_once 'config.php';
if(!$conn){
    die("Connection failed".$mysqli_error());
}
$mid=$_GET['mid'];
$a="UPDATE event_registrations set paid=1 WHERE mid='$mid'";
$m="SELECT * FROm event_registrations WHERE mid='$mid'";
$r=mysqli_query($conn,$a);
$res=mysqli_query($conn,$m);
if($r){
    echo "Payment successful";
}
if($res->num_rows > 0){
    if($row=$res->fetch_assoc()){
        $j=json_encode($row);
        echo $j;
    }else{
        echo "mid = ".$mid." not found";
    }
}else{
    echo "No rows found";
}
?>