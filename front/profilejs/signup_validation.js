$("#signup_button").click(function(){

          $signup_name=$("#signup_name").val();
          $Phone_numbrer=$("#Phone_numbrer").val();

          $signup_Password=$("#signup_Password").val();

          $signup_Confirm_Password=$("#signup_Confirm_Password").val();

          if($signup_name=="")
          {
            $("#print_error_msg").show();
            $("#print_error_msg").text("enter your username");
            return false;

          }
          else if($Phone_numbrer=="")
          {
            $("#print_error_msg").show();
            $("#print_error_msg").text("enter your Phone number");
            return false;
          }
          else if($signup_Password=="")
          {
            $("#print_error_msg").show();
            $("#print_error_msg").text("enter your password");
            return false;
          }
          else if($signup_Confirm_Password=="")
          {
            $("#print_error_msg").show();
            $("#print_error_msg").text("enter Confirm password ");
            return false;
          }
          else if($signup_Password!=$signup_Confirm_Password)
          {
            $("#print_error_msg").show();
            $("#print_error_msg").text("The confirm password is wrong ");
            return false;
          }
          else 
          {
           $("#print_error_msg").hide();

             // window.location ="#loginform_container";
           }
         })