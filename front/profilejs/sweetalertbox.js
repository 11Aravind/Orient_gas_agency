
  function successalert()
  {
     swal({
  title: "Your request is succesively sended!",
  text: "You clicked the button!",
  icon: "success",
  button: "OK",
}).then(function(){
     window.location.href="status.php";
    });
    // swal("Your request is succesively sended!", "You clicked the button!", "success").then(function(){
    //  window.location.href="index.php";
    // });
  }
function successalert_inGasbooking()
{
  swal({
  title: "Your Gas Booking request is succesively sended!",
  text: "",
  icon: "success",
  button: "OK",
}).then(function(){
     window.location.href="gas_booking_history.php";
    }); 
}

  function erroralert()
  {
    swal("Your request is not sended!", "Please submit the form again!", "error");
  }
  function gas_connection_error()
{
  swal({
  title: "Pls Register In KYC Form Or Your New gas Connection Is Not Approved",
  text: "",
  icon: "error",
  button: "OK",
}).then(function(){
     window.location.href="Gas_Booking_form.php";
    }); 
}
// gas_booking_history_error
 function gas_booking_history_error()
{
  swal({
  title: "You Do Not Have a Gas Connection Yet.",
  text: "Place Take A New Gas Connection",
  icon: "error",
  button: "OK",
}).then(function(){
     window.location.href="Gas_Booking_form.php";
    }); 
}

  function change_phoneno_success()
{
  swal({
  title: "Phone number is successfuly changed",
  text: "",
  icon: "success",
  button: "OK",
}).then(function(){
     window.location.href="index.php";
    }); 
}
 function chane_phoneno_failed()
  {
    swal("Your Password is incorrect", "Please enter your correct password!", "error");
  }
 function complaint_success_alert()
{
  swal({
  title: "Your complaint is successfuly sended",
  text: "",
  icon: "success",
  button: "OK",
}).then(function(){
     window.location.href="index.php";
    }); 
}
// login_erroralert()


