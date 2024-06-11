<?php
include_once('config.php');
session_start();
extract($_POST);

		
		$r =mysqli_query($t,"select Pass,firstname from register where email = '".$username."'");

		if (mysqli_num_rows($r) >0) {
			$x =mysqli_fetch_array($r);
			if (($Pass) == $x['Pass']) {
				if ((($email) == $x['email'])) {
				
				$_SESSION['firstname'] = $x['firstname'];
				header('location:index.php');
			}
		
				}
			else{
				
				$_SESSION['msg'] = 'Your  password is wrong';
				header('location:login.php');
		      }	

			}
			else{
				
				$_SESSION['msg'] = 'Your  email is wrong';
				header('location:login.php');
		      }	
		

?>