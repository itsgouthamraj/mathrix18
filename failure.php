<?php
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
        <tr><td> Status </td><td> Failure </td></tr>
        <tr><td> Name </td><td> <?php echo $firstname; ?> </td></tr>
        <tr><td> MathRix ID </td><td> <?php echo $_POST['udf1']; ?> </td></tr>
        <tr><td> Amount </td><td> <?php echo $amount; ?> </td></tr>
        <tr><td> Reference ID </td><td> <?php echo $txnid; ?> </td></tr>
        <tr><td colspan="2">If any amount has been deduced from your account , please contact us at <a href="mailto:contact@mathrixau.in"></a> contact@mathrixau.in </td></tr>  
        <tr><td colspan="2"> <button class="btn btn-danger btn-lg btn-block" onclick="window.location.href='http://mathrixau.in'">Go to home</button> </td></tr>  
    </tbody>
  </table>
</div>

</body>
</html>
