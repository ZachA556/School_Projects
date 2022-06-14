<?php
   

      $Fname = filter_input(INPUT_POST, 'FName');
      $Lname = filter_input(INPUT_POST, 'LName');
      $password = filter_input(INPUT_POST, 'Password');
      $Cpassword = filter_input(INPUT_POST, 'Cpassword');
      $email = filter_input(INPUT_POST, 'Email');


    if(empty($Fname))
    {
        $Fname_error = "Please enter a First name";
    }
    else if(strlen($Fname) < 4)
    {
        $Fname_error = "Must have a minimum of 4 characters";
    }
    if(empty($Lname))
    {
        $Lname_error = "Please enter a Last Name";
    }
    else if(strlen($Lname) < 4)
    {
        $Lname_error = "Must have a minimum of 4 characters";
    }
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    else if(strlen($email) < 6)
    {
        $emailErr = "Put more characters you fuck";
    }

    if(empty($password))
    {
        $pass_error = "Please enter a password";
    }
    else if(strlen($password) < 6)
    {
        $pass_error = "Must have a minimum of 6 characters";
    }

    if(empty($Cpassword))
    {
        $Cpass_error = "Please Confirm password";
    }
    else if(strlen($Cpassword) < 6)
    {
        $Cpass_error = "Must have a minimum of 6 characters";
    }

    if(empty($Fname_error) && empty($Lname_error) && empty($pass_error) && empty($Cpass_error) && empty($emailErr))
    {
        include('success.php'); 
    }
    else
    {
        include('Reg_form.php');
    }
    
       


  
?>