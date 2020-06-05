<?php

$username=$_POST['user'];
$password=$_POST['pass'];




$con=mysqli_connect('localhost','root','','makeyourstay');
mysqli_select_db($con, 'makeyourstay');


$result=mysqli_query($con,"select * from adminlogin where username='".$username."' AND password='".$password."'")or die(mysqli_error($con));
					
$row=mysqli_fetch_assoc($result);
if($username==$row['username'] && $password==$row['password'] ){
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
   /* header("Location: add.php");*/ 
	 
}else
{
	echo "Failed";
}


?>
