<!DOCTYPE html>
<html>
<head>
<title>Login page</title>
    <link rel="stylesheet" href="css/style_register.css">

</head>
<body >
<div id="main-wrapper">
    <center> <h2>Login Form</h2>
    <img width="300" height="300" src="images/3.jpg" class="avtar"/>
    </center>
    <br>
    <hr>
    
    <form action="index_2.php"method="post">
        <label><b>Username:</b></label><br>
    <input type="text"class="inputvalues"placeholder="Type your username"/><br>
        <lable><b>Password:</b>
        </lable><br>
        <input type="Password"class="inputvalues"placeholder="your Password"/><br>
        <br>
        <input type="submit" id="Login_btn" value="Login"/><br>
        <a href="register.php"><input  type="button" id="register_btn" value="Register"/></a>
    
    </form>
    
    <?php
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query="select * from user_info WHERE username='$username' AND password='$password'";
    
    $query_run=mysqli_query($con,$query);
    
    if(mysqli_num_rows($query_run)>0)
    {
         $_SESSION['username']=$username;
        header("location:login.php");
    }
    else
    {
         echo '<script type=text/javascript> alert("Inavlid Credentials") </script>';
    }
}
else
{
    
}

?>
    
    </div>
</body>
</html>