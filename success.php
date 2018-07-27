<?php
if(isset($_POST['status'])){
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt = "YdfEBOHQqC";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }

 $user = 'root';
$pass = '';
$host = 'localhost';
$db = 'mathrix18';

$conn = mysqli_connect($host,$user,$pass,$db);
 $mid = $_POST['udf1'];
 $query = "INSERT INTO workshop (mid) VALUES('$mid')";     
 $result = mysqli_query($conn,$query);
?>	
    
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resistrations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
      background-color: black;
    }
  </style>
</head>
<body>
<div class="text-center">
  <h1 style="color: green;">Payment Details</h1>
</div>
<div class="container">
     
  <table class="table table-dark table-striped">
    <tbody>
        <tr><td> Status </td><td> Success </td></tr>
        <tr><td> Name </td><td> <?php echo $firstname; ?> </td></tr>
        <tr><td> MathRix ID </td><td> <?php echo $_POST['udf1']; ?> </td></tr>
        <tr><td> Amount Paid</td><td> <?php echo $amount; ?> </td></tr>
        <tr><td> Reference ID </td><td> <?php echo $txnid; ?> </td></tr>
        <tr><td colspan="2" class="text-center">Venue and Timings</td></tr>
        <tr><td> Date </td><td> 15th March 2018</td></tr>
        <tr><td> Venue </td><td> Dept. of Mathematics,Anna University</td></tr>
        <tr><td> Time </td><td> 10.30 AM </td></tr>
        <tr><td colspan="2"> Show your MathRix ID or MathRix QR Code at Registration Desk</td></tr>  
    </tbody>
  </table>
</div>

</body>
</html>
<?php
}
else
{
  
}
?>