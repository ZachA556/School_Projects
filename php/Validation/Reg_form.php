<?php
    if(!isset($Fname))
    {
        $Fname = " ";
     
    }
?>

<form action="validate.php" method="post">
    <label for="First Name"><b>First Name</b></label><br>

    <input placeholder="Enter First Name" type="text"  name="FName"
     value="<?php htmlspecialchars($Fname)?>"><br>

     <?php if(isset($Fname)) ?>
         

    <?php if(isset($Fname_error)) {?>
        <p><?php echo $Fname_error?></p>
    <?php }?>

    <label for="Last Name"><b>Last Name</b></label><br>
    
    <input placeholder="Enter Last Name" type="text" name="LName"
     value="<?php htmlspecialchars($Lname)?>"><br>

    <?php if(isset($Lname)) ?>
        

    <?php if(isset($Lname_error)) {?>
        <p><?php echo $Lname_error?></p>
    <?php }?>
    <label for="Email"><b>Email</b></label><br>
    
    <input placeholder="Enter Email" type="email" name="Email"
     value="<?php htmlspecialchars($email)?>"><br>

     <?php if(isset($email)) ?>
        

    <?php if(isset($emailErr)) {?>
        <p><?php echo $emailErr?></p>
    <?php }?>
   

    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="Password" 
    value="<?php htmlspecialchars($password)?>"><br>
    
    <?php if(isset($password)) ?>
         

    <?php if(isset($pass_error)) {?>
        <p><?php echo $pass_error?></p>
    <?php }?>

    <label for="Confirm Password"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Enter Confirm Password" name="Cpassword" 
    value="<?php htmlspecialchars($Cpassword)?>"><br>

    <?php if(isset($Cpassword)) ?>
         
    
    <?php if(isset($Cpass_error)) {?>
        <p><?php echo $Cpass_error?></p>
    <?php }?>  

    <input type="submit" value="submit"> 
   
</form>
