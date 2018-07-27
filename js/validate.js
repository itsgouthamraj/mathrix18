function regUser(){
  
  var err=0;
	var name = $('#name').val();
	var clg = $('#clg').val();
	var id = $('#id').val();
	var email = $('#email').val();
	var ph = $('#ph').val();
  if(name=="" || name.length<5){
    $('#errmsg').html('* Please enter a valid name');
    err=1;
    return false;
  }
  if(clg=="" || clg.length<3){
    $('#errmsg').html('* Please enter a valid College Name');
    err=1;
    return false;
  }
  if(id=="" || id.length<3){
    $('#errmsg').html('* Please enter a valid College ID');
    err=1;
    return false;
  }
  if(ph.length>13 || ph.length<10){
    $('#errmsg').html('* Please enter a valid mobile number');
    err=1;
    return false;
  }
  console.log( $('#Reg').serialize() );
        if(err!=1){
          $('#sendReg').html('<i class="fa fa-circle-o-notch fa-spin"></i> &nbsp;Please wait..');
          $.post("auth/reg.php",$('#Reg').serialize(),function(data,status){
            if(data=='101'){
              
               
               $('#regstatusbody').html('<div style="color:#62C85B;"><h4>Already Registered</h4><br><p style="color:white;">The email address or ID card number you have used is already registered. However, your data is safe with us .If you are still experiencing problems, please contact us at <a href="mailto:contact@mathrixau.in">contact@mathrixau.in</a>.</p></div>');

            }
            else if(data=='1'){
              
              $('#regstatusbody').html('<div style="color:#62C85B;"><h4>Successfully Registered</h4><br><p style="color:white;">Hi '+name+',<br><br>You have Successfully registered for the MathRix`18 . We sent the details to your mail address <strong>'+email+'</strong>, if the mail is not recieved with an hour check the spam folders .If you are still experiencing problems, please contact us at <a href="mailto:contact@mathrixau.in">contact@mathrixau.in</a>.<br><br>Best wishes,<br>The MathRix team.</p></div>');
              
            }
            else{
              $('#regstatusbody').html('<div style="color:red"><h4>Oops.... </h4><br><p style="color:white;"> We encountered an internal error our team is onto it right now please try again after some time . If this problem continues , conatact us at <a href="mailto:contact@mathrixau.in">contact@mathrixau.in</a>.</p></div>');
            }
            $('#regform').modal('hide');
            $('#regstatus').modal('show');
            document.getElementById("Reg").reset();
            $('#sendReg').html('Register');
        });
        }
	return false;
}
function numt(event) {
    var x = event.which || event.keyCode;
    if(x==38 || x==40)
      return false;    
}
function numF(v) {

  if(v<=1 || v>=10){
      if(v>=10){
        document.getElementById('qty').value=10;
        if(v!=10){return false;}
      }
      else if(v<=1){
        document.getElementById('qty').value=1;   
        if(v!=1){return false;}
      }
        var wv = $('#qty').val();
$('#tot').html(wv);
}

}
function workshp(){
  var m = $('#mid').val();
  // alert(m);
  if(m.length==7){
    var a = m.charAt(0);var b = m.charAt(1);var c = m.charAt(2);
    if(a=='M' && b=='1' && c=='8'){
      {
        $.post("auth/loadw.php",{"mid":m},function(data,status){
          if(data=='01'){
          $("#pay").submit();
          }
          else if(data=='00'){
            //$('#errmsg2').html('Already Paid');          
              $('#errmsg2').html('Please enter the valid MathRix ID');
          }
          else{
            $('#errmsg2').html('Already Paid');          
          }
        });
        return false;
      }
    }
  }
  $('#errmsg2').html('Please enter the valid MathRix ID');
  return false;
}
function openreg(){
  $('#bookworkshop').modal('hide');
  $('#regform').modal('show');
  return false;
}
function opennot(){
  $('#notify').modal('hide');
  $('#bookworkshop').modal('show');
  return false;
}

