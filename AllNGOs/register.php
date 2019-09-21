<?php
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    
<title>Registration Page</title>
    <link rel="stylesheet" href="css/style_register.css">

</head>
<body style="background.color:e67e22   ">
<div id="main-wrapper">
    <center> <h2>Registration Form</h2>
    <img src="images/3.jpg"class="avtar"/>
    </center>
    <br>
    <hr>
    
    <form class="muform" action="register.php" method="post">
        <label><b>Username:</b></label><br>
    <input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
        <label><b>Mobile Number:</b></label><br>
    <input name="number" type="number" class="inputvalues" placeholder="+91 9876543213"/><br>
        <lable><b>Password:</b>
        </lable><br>
        <input name="password" type="Password" class="inputvalues" placeholder="your Password"/><br>
         <lable><b>Confirm Password:</b></lable><br>
    <input name="cpassword" type="Password" class="inputvalues" placeholder="Confirm Password"/><br><br>
        <input name="submit-btn" type="submit" id="singup_btn" value="Sign Up"/><br>
       <a href="login.php"><input  type="button" id="back_btn" value="Back"/></a> 
        
    </form>
    
    <?php
    if(isset($_POST['submitA_btn']))
    {
        //echo '<script type="text/javascript"> alert("sign up button clicked")   </script';
        $username=$_POST['username'];
        $number=$_POST['number'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        
        if($password==$cpassword)
        {
            $query="select * from user_info WHERE username='$username' ";
            $query_run=mysqli_query($con,$query);
            
            if(mysqli_num_row($query_run)>0)
            {
                echo '<script type="text/javascript"> alert("user already exits type differen namme")   </script';
                
            }
            else{
                $query="insert into user values('$username','$password')";
                $query_run=mysqli_query($con,$query);
                if($query_run)
                {
                    echo '<script type="text/javascript"> alert("user registered succefully")   </script';
                }
                else{
                    echo '<script type="text/javascript"> alert("Error!")   </script';
                }
            }
        }
    }
    ?>
    
        </div>

</body>
</html>