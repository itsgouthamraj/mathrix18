      <?php
      include_once 'config.php';
      $q = "SELECT DISTINCT mid from workshop";
      $r = mysqli_query($conn,$q);
      $c = mysqli_num_rows($r);
      if($c!=0)
      {
          while($rw = mysqli_fetch_array($r)){
          $m1 = $rw['mid'];
          echo '<br>'.$m1;
          $query = "SELECT * FROM event_registrations WHERE mid='$m1'";
      $result = mysqli_query($conn,$query);
      $count = mysqli_num_rows($result);
      if($count!=0)
      {
          while($row = mysqli_fetch_array($result)){
          $m = $row['mid'];$n = $row['name'];$c = $row['clg'];$id = $row['id'];$mob = $row['ph'];$email=$row['email'];

        $q2 = "INSERT into work (mid,name,clg,email,phone,id) VALUES ('$m','$n','$c','$email','$mob',$id)";
        $r2 = mysqli_query($conn,$q2);
        echo $r2;
               }
      }
      }}
      ?>