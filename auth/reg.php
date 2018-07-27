<?php
include_once 'config.php';
if(isset($_POST["studName"]) && isset($_POST["studClg"]) && isset($_POST["studId"]) && isset($_POST["studEmail"]) && isset($_POST["studPhone"]))
{
  $name = trim($_POST['studName']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);

  $email = trim($_POST['studEmail']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $id = trim($_POST['studId']);
  $id = strip_tags($id);
  $id = htmlspecialchars($id);

  $clg = trim($_POST['studClg']);
  $clg = strip_tags($clg);
  $clg = htmlspecialchars($clg);

  $ph = $_POST['studPhone'];


  $mid = 'M1800001';
  if(empty($name) || !filter_var($email,FILTER_VALIDATE_EMAIL) || empty($id) || empty($clg) || empty($ph) || (strlen($ph)<8) || (strlen($email)<5))
  {
     echo "0";
  }
  else
  {
      $query = "SELECT * FROM event_registrations WHERE email='$email' OR id='$id'";
      $result = mysqli_query($conn,$query);
      $count = mysqli_num_rows($result);
      if($count == 0)
      {
      $query = "SELECT * FROM event_registrations";
      $result = mysqli_query($conn,$query);
      $count = mysqli_num_rows($result);
      $count++;
      $count = 180000+$count;
      $mid = 'M'.$count;
          $query = "INSERT INTO event_registrations (mid,name,clg,id,email,ph) VALUES ('$mid','$name','$clg','$id','$email',$ph)";
          $result = mysqli_query($conn,$query);
          if($result)
          {
//
//
//
//


require 'PHPMailerAutoload.php';
$content = '<div style="background:#f8f9fa;height:100%!important;margin:0;padding:0;width:100%!important" bgcolor="#f8f9fa">
  <center>
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="background:#f8f9fa;border-collapse:collapse;height:100%!important;margin:0;padding:0;width:100%!important" bgcolor="#f8f9fa">
      <tbody><tr>
        <td align="center" valign="top" style="border-top-width:0;height:100%!important;margin:0;padding:20px 10px;width:100%!important">

          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;border:0;max-width:600px">
            <tbody><tr>
              <td align="center" valign="top" style="text-align:center;background:#f8f9fa;border-bottom-color:#2ec866;border-bottom-style:solid;border-bottom-width:10px;border-top-width:0" bgcolor="#f8f9fa">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
                  <tbody><tr>
                    <td valign="top">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;min-width:100%">
                        <tbody>
                          <tr>
                            <td valign="top" style="text-align:center">
                              <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;min-width:100%">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" style="text-align:center;color:#ffffff;font-family:Helvetica;font-size:11px;line-height:125%;padding:9px 18px;text-align:center">
                                      <span style="font-weight: bolder;font-size: 42px;color: #2ec866;">MATHRIX&#39;18</span>

                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody></table>

              </td>
            </tr>
            <tr>
              <td align="center" valign="top" style="background:#ffffff;border-bottom-width:0;border-top-width:0" bgcolor="#ffffff">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
                  <tbody><tr style="border-bottom:1px solid #eff1f3;border-left:1px solid #eff1f3;border-right:1px solid #eff1f3">
                    <td valign="top" style="padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;min-width:100%">
                        <tbody>
                          <tr>
                            <td valign="top">
                              <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;min-width:100%">
                                <tbody>
                                  <tr>
                                    <td valign="top" style="color:#606060;font-family:Verdana,Geneva,sans-serif;font-size:15px;line-height:125%;padding:9px 18px 0px 18px;text-align:left" align="left">
                                      <span style="font-family:arial,helvetica neue,helvetica,sans-serif">
Hi '.$name.',
<br><br>
You have successfuly registered for MATHRIX&#39;18
                                      </span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;min-width:100%">
                        <tbody>
                          <tr>
                            <td valign="top">
                              <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;min-width:100%" >
                                <tbody>
                                  <tr>
                                    <td valign="top" style="color:#606060;font-family:Verdana,Geneva,sans-serif;font-size:15px;line-height:125%;padding:9px 18px 5px;text-align:left" align="left">
                                        <table width="100%" style="min-width:100%;width:100%"><tbody><tr>
    <td style="border:1px solid #c2c7d0;padding:12px;border-radius:4px">

                                      <h2 style="color:#2ec866;display:block;font-family:arial,helvetica neue,helvetica,sans-serif;font-weight:bold;font-size:18px;font-weight:normal;letter-spacing:normal;line-height:125%;margin:0;padding:0 0 4px;text-align:left" align="left">
                                          <a title="" href="" style="text-decoration:none;color:#2ec866;font-family:arial,helvetica neue,helvetica,sans-serif;font-weight:bold;font-size:18px;font-weight:normal"><b>Epsilon to Infinity</b></a>
                                      </h2>
                                      <h3 style="color:#979faf;display:block;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-style:normal;font-weight:normal;letter-spacing:normal;line-height:125%;margin:0 0 10px 0;padding:0;text-align:left" align="left">

                                          MATHRIX ID
                                         |
                                        '.$mid.'
                                      </h3>
                                        <span>
                                        <strong>Show the below QR code at the registration desk.</strong>
                                      </span>
                                      <center>
                                        <img src="http://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$mid.'">
                                      </center>
                                      </td>
                                    </tr>
                                </tbody></table></td></tr></tbody>
                              </table>
                            </td>
                            </tr>
                        </tbody>
                      </table>

                      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;min-width:100%">
                        <tbody>
                          <tr>
                            <td valign="top">
                              <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;min-width:100%">
                                <tbody>
                                  <tr>
                                    <td valign="top"style="color:#606060;font-family:Verdana,Geneva,sans-serif;font-size:15px;line-height:125%;padding:9px 18px;text-align:left" align="left">
                                      <span style="font-family:arial,helvetica neue,helvetica,sans-serif">
Best Wishes,<br>
The Mathrix team</span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                    </tr>
                </tbody></table>

              </td>
              </tr>

        </tr>
    </tbody></table>
  </center>
</div>';
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'your mail';                 // SMTP username
$mail->Password = 'pass';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;
                              // TCP port to connect to

$mail->setFrom('events@mathrixau.in', 'Events Team');
$mail->addAddress($email,$name);     // Add a recipient
$mail->addReplyTo('contact@mathrixau.in', 'Support Team,Mathrix');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'MathRix`18 Registration Details';
$mail->Body    = $content;
$mail->AltBody = $mid;

if(!$mail->send()) {
    echo 'm pro';
    echo $mail->ErrorInfo;

} else {
    echo '1';
}








//
//
//
//

          }
          else
          {
          echo "db err";
          }
      }
      else
      {
       echo "101";
      }
  }

}
else{
  echo "data not rec";
}
?>
