 
<footr>
 <div class="footer">
  <div class="container">
   <div class="row">
    <div class="col-md-6 offset-md-3">
     <ul class="sociel">
       <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
       <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
       <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
       <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
     </ul>
   </div>
 </div>
 <div class="row">
   <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
    <div class="contact">
     <h3>conatct us</h3>
     <span>123 Second Street Fifth Avenue,<br>
       Manhattan, New York<br>
     +987 654 3210</span>
   </div>
 </div>
 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
  <div class="contact">
   <h3>ADDITIONAL LINKS</h3>
   <ul class="lik">
     <li> <a href="#">About us</a></li>
     <li> <a href="#">Terms and conditions</a></li>
     <li> <a href="#">Privacy policy</a></li>
     <li> <a href="#">News</a></li>
     <li> <a href="#">Contact us</a></li>
   </ul>
 </div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
  <div class="contact">
   <h3>service</h3>
   <ul class="lik">
    <li> <a href="#"> Data recovery</a></li>
    <li> <a href="#">Computer repair</a></li>
    <li> <a href="#">Mobile service</a></li>
    <li> <a href="#">Network solutions</a></li>
    <li> <a href="#">Technical support</a></li>
  </div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
  <div class="contact">
   <h3>About lighten</h3>
   <span>Tincidunt elit magnis nulla facilisis. Dolor Sapien nunc amet ultrices, </span>
 </div>
</div>
</div>
</div>
<div class="copyright">
 <p>Copyright 2021 All Right Reserved By Aravind as</p>
</div>

</div>
</footr>
<!-- end footer -->



</body>
<script src="js/jquery.min.js"></script> 
<script src="js/jquery-2.1.4.min.js"></script>
<!-- <script src="js/popper.min.js"></script>  -->
<script src="js/bootstrap.bundle.min.js"></script> 

 
<!-- <script src="js/plugin.js"></script>  -->
<!-- sidebar --> 
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- kyc validation start  -->
<script src="profilejs/kycform_validation.js"></script> 
<!-- kyc validation end -->
<!-- customer signup start -->
<script src="profilejs/signup_validation.js"></script>
<script src="js/change_phonenumber.js"></script>
<!-- front/ -->
<!-- customer signup end -->
<!-- <script src="js/custom.js"></script> -->
<?php 

if(isset($_GET['page']))
{
  // echo "<script>alert('side')</script>";
  if($_SESSION['customer_id']=="")
  {

  // echo  "<script>alert(".$_SESSION['customer_id'].")</script>";    
                    // echo "<script>alert('inside')</script>";
    echo "<script>jQuery(document).ready(function($){
     $('#showCustomerPopUpBtn').trigger('click')

   })</script>";

 }
}

?>
<script>
  jQuery(document).ready(function($){
 //$rationcardstatus=$( "#rationcardstatus").val();
 // $rationcardstatus=$( "#rationcardstatus option:selected" ).text();
 //
 $( "#rationcardstatus").change(function(){
  if($("#rationcardstatus").val()=="Antyodaya Anna Yojana")
  {
   $("#paymentcontainer").hide(); 
 }
 else
 {
  $("#paymentcontainer").show();
}
})

})</script>
<script>
  jQuery(document).ready(function($){
 
 $("#purpose").change(function(){
   // alert('$purpose');
  if($("#purpose").val()=="Business")
  {
  
     $("#busciencecategory").show();
   $("#homecategory").hide(); 
    }
 else 
 {
 $("#busciencecategory").hide(); 
   $("#homecategory").show(); 
}

})

})</script>
        <!-- (document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
       }); -->
       <!-- <script src="js/jquery.fancybox.min.js"></script> -->
       <script>


         // $(".zoom").hover(function(){

         // $(this).addClass('transition');
         // }, function(){

         // $(this).removeClass('transition');
         // });
         // });
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
          let mobile_no=$("#mobile_no").val();
          let password=$("#login_password").val();
          if(mobile_no==""){
            $("#print_error_msg").show();
            $("#print_error_msg").text("Enter Mobile Number");
            return false;
          }
          else if(password=="")
          {
           $("#print_error_msg").show();
           $("#print_error_msg").text("Enter Your Password");
           return false;
         }
         else
         {
           $("#print_error_msg").hide();
             // window.location ="i.php";

            //$("#print_error_msg").text("");
          }
        })
      </script>
      <!-- sign up validation sarting -->
      <script>
        
       </script>
       <script>
         $("#customRadioInline1").click(function(){
           $("#print_error_msg").hide();
         })
         $("#customRadioInline2").click(function(){
           $("#print_error_msg").hide();
         })
       </script>
       <!-- gas booking upi payment hide or show -->
       <!-- upi_payment
exampleRadios1
exampleRadios2 -->
<!-- $("#exampleRadios1").click -->
<script>
 $("#exampleRadios1").click(function(){
  $("#upi_payment").show();
})
 $("#exampleRadios2").click(function(){
  $("#upi_payment").hide();
})
</script>
<!-- <script>
  jQuery(document).ready(function(){
     
  $('#paymentbutton').click(function(e){
    e.preventDefault();
    $('#displaystatus').show();
  })
})
</script> -->
<!-- staff form validation start -->
 <!-- <script>
  $("#submitBtn").click(function(e){
   e.preventDefault();
    let staff_name=$("#name").val();
    let staff_position=$("#position").val();
    let Photo=$("#Photos").val();
    let staff_description=$("#description").val();
    alert("hai");
    if(staff_name==" ")
    {
    alert("Enter the staff name");
    return false;
    }
    else if(staff_position==" ")
      {
    alert("Enter the staff position");
     return false;
    }
    else if(Photo=="")
    
       {
    alert("Enter the staff position");
     return false;
    }
    else if(staff_description=="")
       {
    alert("Enter the staff_description");
     return false;
    }
    else 
    {
      alert("ok monuse");
       return true;
    }
  })

</script> -->

<!-- staff validation form end -->
<!-- kyc form validation start -->
 
    <!-- kyc form validation end -->

      <script src="../back/assets/js/dataTables.min.js" type="text/javascript"></script>
         <!-- <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript"></script> -->

<script>jQuery(document).ready(function($){
    $('#gas_booking_history').DataTable();

   })
    </script>
    <script>
    $("#ok").click(function(){
      var url="http://localhost/Bca_Mini_Project/front/index.php";
      $(location).attr('href',url);
                         // window.location.replace("");

                        })
                       </script>
</html>