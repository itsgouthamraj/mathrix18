<div class="modal fade" id="bookworkshop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content black">
      <div class="modal-header">
        <h5 class="modal-title" style="color: #62C85B;text-align: center;" id="exampleModalLabel">Workshop Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color: #62C85B;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form id="pay" action="auth/payment.php" method="post">
           <div class="form-group">
            <br>
            <?php

              $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
            ?>


            <input type="hidden" name="amount" value="300.00" />
            <input type="hidden" name="key" value="x60UMQ1o">
            <input type="hidden" name="productinfo" value="CYBER SECURITY WORKSHOP" />
            <input type="hidden" name="surl" value="http://mathrixau.in/success.php" size="64"/>
            <input type="hidden" name="furl" value="http://mathrixau.in/failure.php" size="64"/>
            <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
            <input type="hidden" name="udf2">
            <input type="hidden" name="udf3">
            <input type="hidden" name="udf4">
            <input type="hidden" name="udf5">
            <input type="hidden" name="udf6">
            <input type="hidden" name="udf7">
            <input type="hidden" name="udf8">
            <input type="hidden" name="udf9">
            <input type="hidden" name="udf10">
            <input type="hidden" name="lastname">
            <input type="hidden" name="address1">
            <input type="hidden" name="address2">
            <input type="hidden" name="city">
            <input type="hidden" name="state">
            <input type="hidden" name="country">
            <input type="hidden" name="zipcode">
            
            <div id="hidd"></div>
               <input style="border-color: #62C85B; background-color: black;color: #62C85B;" type="text" class="form-control" id="mid" name="udf1" placeholder="Enter your Mathrix ID"><br>
 <p>In Case you haven't got your MathRix ID yet , click <a href="#" onclick="return openreg()">here</a>  Register</p><br></form>
    <!-- 
               <input id="qty" class="form-control" onkeydown="return numF(this.value)" style=" border-color: #62C85B; background-color: black;color: #62C85B;" type="number" onclick="this.value=1" name="wQty" placeholder="No. of seats (max 10)"> <br> -->
               <button onclick="return workshp()" class="btn btn-danger btn-lg btn-block" value="Register">Pay &#8377; <span id="tot">300</span></button><br>
               <p id="errmsg2" style="color:red;padding-left: 25px;"></p>
        
               </div>
           </div>
         <br>
        
      </div>
      
    </div>
  </div>
</div>