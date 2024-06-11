<?php
include_once('config.php');

?>
<!DOCTYPE html>    
<html>    
<head>    
    <title>New User Form</title>    
    <link rel="stylesheet" type="text/css" href="cs/New.css">    
</head>    
<body>  

    <h2 id="h2">Registration My Garden</h2>    
    <div class="login">    
    <form  id="login" method="post" action="Register.php">
        <input type="hidden" name="py" value="1">
        <label><b>First Name</b><br>
        <input  type="text" name="firstname" id="fist" align="center" placeholder="firstname">
        </label><br>
         
        <label><b>Last Name </b><br>
        </label>    
        <input  type="text" name="lastname" id="last" align="center" placeholder="lastname"><br>
        <label><b>Email Address </b><br>
        </label>   
        <input  type="Email" name="Email" id="Email" align="center" placeholder="Email"> <br>  
        
         <label><b>Contact </b><br>
        </label>    
        <input  type="number" name="number" id="phone" align="center" placeholder="phone"><br> 
        <label><b>Password</b> <br>   
        </label>    
        <input type="text"  name="Pass" id="Password" placeholder="Password"><br>    
        <br>  <br>
        <input type="submit" value ="submit" style="width: 100px;background-color: #1e90ff;display: inline-block;border-radius: 10px;font-size: 15px;   
           padding-left: 10px; ">
         
       
    </form>     
</div>    
</body> 
</html>   
 
    <script type="text/javascript">
    function validateForm() {
  var x = document.forms["myForm"]["firstname"].value;
  if (x == "") {
    alert("Name must be filled out");
    document.myForm.firstname.focus() ;
    return false;
  }
  var x = document.forms["myForm"]["lastname"].value;
  if (x == "") {
    alert("Last Name must be filled out");
    document.myForm.lastname.focus() ;
    return false;
  }
  var x = document.forms["myForm"]["Email"].value;
  if (x == "") {
    alert("Email must be filled out");
    document.myForm.Email.focus() ;
    return false;
  }
  var x = document.forms["myForm"]["number"].value;
  if (x == "") {
    alert("Contact must be filled out");
    document.myForm.number.focus() ;
    return false;
  }
  var password = document.forms["myForm"]["Pass"].value;
  if (password == "") {
    alert("Password must be filled out");
    document.myForm.Pass.focus() ;
    return false;
  }else if (password.length<6) {
    alert("password must atleast 6 characters long");
    document.myForm.password.focus() ;
    return false;
  }
 /* var cpassword = document.forms["myForm"]["cpassword"].value;
  if (cpassword == "") {
    alert("Confirm Password must be filled out");
    document.myForm.cpassword.focus() ;
    return false;
  }else if (cpassword.length<6) {
    alert("Confirm Password must atleast 6 characters long");
    document.myForm.cpassword.focus() ;
    return false;
  }else if (cpassword != password) {
    alert("Password and Confirm Password must be same");
    return false;*/
  
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".com");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myForm.email.focus() ;
            return false;
         }
         return( true );
}
</script>
</html>
    