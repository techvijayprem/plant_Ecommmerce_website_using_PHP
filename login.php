<?php
session_start();
if (isset($_SESSION['firstname'])) {
  header('location:index.php');
}


?>
<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="c/style.css">    
</head>    
<body>  

    <h2 id="h2">Login in My Garden</h2>    
    <div class="login">    
    <form  id="login" method="post" action="login1.php"> 
    <span style="color:blue;font-size: 20px;">
      <?php
      if (isset($_SESSION['msg'])) { 
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
  }
  ?>
    </span> 
    <br><br>
        <label><b>Email</b></label>    
        <input  type="text" name="username" required="required" id="Email" align="center" placeholder="enter Email">    
        <br><br>  

        <label><b>Password</b></label>    
        <input type="Password"  required="required" name="Pass" id="Pass1" placeholder="enter Password">   <br><br>  
        <input type="submit" value="Login" style="width: 100px;background-color: #1e90ff;display: inline-block;border-radius: 10px;font-size: 15px;   
           padding-left: 10px; "/>
        
       
    </form>     
</div>    
</body>    
</html>     