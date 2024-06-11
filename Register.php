<?php
include_once('config.php');

switch ($_POST['py']) {
	case '1':
		extract($_POST);


    $arg = array('firstname'=>$firstname,'lastname'=>$lastname,'Email'=>$Email,'number'=>$number,'Pass'=>$Pass);


   $p = mysqli_query($t,"insert into register(firstname,lastname,Email,number,Pass)values('".$firstname."','".$lastname."','".$Email."','".$number."','".$Pass."')");

   if ($p>0) {
   	header('location:login.php');
   }
   else{
   	 echo 'error';
   }

   break;

   case '2':
   	
   	extract($_POST);

   	 $arg = array('name'=>$name,'email'=>$email,'text'=>$text,'message'=>$message);

	$p = mysqli_query($t,"insert into contact(name,email,text,message)values('".$name."','".$email."','".$text."','".$message."')");

   if ($p>0) {
   	header('location:contact.php');
   }
   else{
   	 echo 'error';
   }
   	break;

      case '3':
      
      extract($_POST);

       $arg = array('name'=>$name,'email'=>$email,'text'=>$text,'message'=>$message);

   $p = mysqli_query($t,"insert into feedback(name,email,text,message)values('".$name."','".$email."','".$text."','".$message."')");

   if ($p>0) {
      header('location:feedback.php');
   }
   else{
       echo 'error';
   }
}

?>
		
	
	

