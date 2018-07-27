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
        <th>S.No</th>
        <th>Mathrix ID</th>
        <th>Name</th>
        <th>College</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Student Id</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      include_once 'config.php';
      $q = "SELECT DISTINCT mid from workshop";
      $r = mysqli_query($conn,$q);
      $c = mysqli_num_rows($r);
      $i=1;
      if($c!=0)
      {
          while($rw = mysqli_fetch_array($r)){
          $m1 = $rw['mid'];
          $query = "SELECT * FROM event_registrations WHERE mid='$m1'";
      $result = mysqli_query($conn,$query);
      $count = mysqli_num_rows($result);
      if($count!=0)
      {
          while($row = mysqli_fetch_array($result)){
          $m = $row['mid'];$n = $row['name'];$c = $row['clg'];$id = $row['id'];$mob = $row['ph'];$email=$row['email'];

          echo '<tr>';
            echo '<td>'.$i++.'</td>';
            echo '<td>'.$m.'</td>';
            echo '<td>'.$n.'</td>';
            echo '<td>'.$c.'</td>';
            echo '<td>'.$email.'</td>';
            echo '<td>'.$mob.'</td>';
            echo '<td>'.$id.'</td>';
            
          echo '</tr>';  
        }
      }
      }}
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
