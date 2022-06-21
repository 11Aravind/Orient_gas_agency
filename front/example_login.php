<?php 
include 'top.php';
 ?>
  <form action="">
     <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2"    style="margin-top: 25px">
                  <li><a  href="#" style="background: white;">    <button id="showCustomerPopUpBtn" type="button" class="btn btn-primary" data-toggle="modal" data-target="" data-whatever="@mdo">Signup/login</button></a></li>
               </div>
               <!--end of login and reg button-->
          </div>
         </div>

         <!--start of login page-->
         <div class="modal fade" id="showCustomerPopUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black">Customer ....</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div id="print_error_msg" style="font-size: 18px;height: 42px;color: #007bff;text-align: center;padding: 8px;background: rgb(236 233 233);"></div>


      <div class="modal-body">
        <form>
          <!--start radio button-->
          <div class="radio_Buttons">
            <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" value="login" name="customRadioInline1" class="a custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">Login</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" value="signIn" name="customRadioInline1" class="a custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">Signup</label>
</div>
 </div>
 <!--end of radio button-->
          <!--login page-->
          <div id="loginform_container">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="login_name">
            <div id="name_error" style="color: red"></div>
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="login_password">
            <div id="password_error" style="color: red"></div>
          </div>
         <a href="#"> <p>Forgot password</p></a>
          <div class="modal-footer">
        
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
        <button type="button" class="btn btn-primary" id="login_Btn">Login</button>
      </div>
        </div>
        <!--end of login page-->
        
          <!-- of sign in page-->
        <div id="signinform_container">
          <!-- <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="recipient-name">
          </div> -->
            <div class="form-row">
    <div class="col">
      <label for="recipient-name" class="col-form-label">Name</label>
      <input type="text" id="signup_name" class="form-control" >
      <!-- <div id="signup_name_error"style="color: red"></div> -->
    </div>
    <div class="col">
      <label for="recipient-name" class="col-form-label">Phone no</label>
      <input type="text" id="Phone_numbrer" class="form-control" placeholder="">
       <!-- <div id="phone_number_error"style="color: red"></div> -->
    </div>
  </div>
       <div class="form-row">
    <div class="col">
      <label for="recipient-name" class="col-form-label">Password</label>
      <input type="password" id="signup_Password" class="form-control" >
             <!-- <span id="password_error"style="color: red"></span> -->

    </div>
    <div class="col">
      <label for="recipient-name" class="col-form-label">Confirm Password</label>
      <input type="password" id="signup_Confirm_Password"class="form-control" >
       <!-- <span id="Confirmpassword_error"style="color: red"></span> -->
    </div>
  </div>
  <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
        <button type="button" id="signup_button" class="btn btn-primary">SignUp</button>
      </div>
</div>

            
          <!--end of signin page-->
          
     <script src="js/jquery.min.js"></script> 
      <!-- <script src="js/popper.min.js"></script>  -->
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script>
       
         //sign in and login radio btn and  display login form and signup form
  $("#customRadioInline1").click(function(){
    $("#signinform_container").hide();
    $("#loginform_container").show();
     $("#forgotpassword").show();
  })
  $("#customRadioInline2").click(function(){
    $("#loginform_container").hide();
     $("#forgotpassword").hide();
    
     $("#signinform_container").show();
  })
  $("#button").click(function(){
    
    $("#signinform_container").hide();
     $("#forgotpassword").show();
  })

  $("#showCustomerPopUpBtn").click(function(){
    $("#customRadioInline1").trigger("click");
    $('#showCustomerPopUp').modal({show: true})
  })
       </script>
       <script>
         $("#showCustomerPopUpBtn").click(function(){
          $("#print_error_msg").hide();
         })
       </script>
       
       
       <script>
        //customer loginform validation starting
         $("#login_Btn").click(function(){
          let name=$("#login_name").val();
        let password=$("#login_password").val();
          if(name==""){
            $("#print_error_msg").show();
$("#print_error_msg").text("Enter User Name");
          }
          else if(password=="")
          {
             $("#print_error_msg").show();
$("#print_error_msg").text("Enter Your Password");
          }
          else
          {
             $("#print_error_msg").hide();
             window.location ="index.php";
            //$("#print_error_msg").text("");
          }
         })
       </script>
      <!-- sign up validation sarting -->
       <script>
        $("#signup_button").click(function(){
          $signup_name=$("#signup_name").val();
                    $Phone_numbrer=$("#Phone_numbrer").val();

          $signup_Password=$("#signup_Password").val();

          $signup_Confirm_Password=$("#signup_Confirm_Password").val();

                    if($signup_name=="")
                    {
                      $("#print_error_msg").show();
                      $("#print_error_msg").text("enter your username");

                    }
                      else if($Phone_numbrer=="")
                    {
                      $("#print_error_msg").show();
                      $("#print_error_msg").text("enter your Phone number");
                    }
                      else if($signup_Password=="")
                    {
                      $("#print_error_msg").show();
                      $("#print_error_msg").text("enter your password");
                    }
                     else if($signup_Confirm_Password=="")
                    {
                      $("#print_error_msg").show();
                      $("#print_error_msg").text("enter Confirm password ");
                    }
                    else if($signup_Password!=$signup_Confirm_Password)
                    {
$("#print_error_msg").show();
                      $("#print_error_msg").text("The confirm password is wrong ");
                    }
                    else 
                    {
                       $("#print_error_msg").hide();
             window.location ="#loginform_container";
                    }
        })
       </script>
       <script>
         $("#customRadioInline1").click(function(){
           $("#print_error_msg").hide();
         })
         $("#customRadioInline2").click(function(){
           $("#print_error_msg").hide();
         })
       </script>

</body>
</html>