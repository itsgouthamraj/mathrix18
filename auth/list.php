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
</head>
<body>

<div class="container-fluid">
     
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Mathrix ID</th>
        <th>Name</th>
        <th>College</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Student Id</th>
        <th>Paid Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include_once 'config.php';
      $query = "SELECT * FROM event_registrations";
      $result = mysqli_query($conn,$query);
      $count = mysqli_num_rows($result);
      if($count!=0)
      {
          while($row = mysqli_fetch_array($result)){
          $m = $row['mid'];$n = $row['name'];$c = $row['clg'];$i = $row['id'];$p = $row['paid'];$mob = $row['ph'];$email=$row['email'];
          if($p==0 || $p=='0'){
            $p="Not Paid";
          }
          else{
            $p = "Paid";
          }
          echo '<tr>';
            echo '<td>'.$m.'</td>';
            echo '<td>'.$n.'</td>';
            echo '<td>'.$c.'</td>';
            echo '<td>'.$email.'</td>';
            echo '<td>'.$mob.'</td>';
            echo '<td>'.$i.'</td>';
            echo '<td>'.$p.'</td>';
          echo '</tr>';  
        }
      }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
