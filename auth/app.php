<?php
$user = 'root';
$pass = '';
$host = 'localhost';
$db = 'mathrix18';

$conn = mysqli_connect($host,$user,$pass,$db);

 // if(isset($_POST['mid'])){
 //    $mid = $_POST['mid'];
 //    $result = $conn->query("SELECT name,email,paid,id,clg FROM event_registrations WHERE mid = '$mid'");
 //    $outp = array();
 //    $outp = $result->fetch_all(MYSQLI_ASSOC);
 //    echo json_encode($outp);
 //    echo "string";
 // }
 // else{
 // echo "d";}
$mid=$_GET['mid'];
$a="SELECT * FROM event_registrations WHERE mid = '$mid'";
$res=mysqli_query($conn,$a);
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