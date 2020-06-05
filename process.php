<?php

$username=$_POST['user'];
$password=$_POST['pass'];
session_start();



$con=mysqli_connect('localhost','root','','makeyourstay');
mysqli_select_db($con, 'makeyourstay');


$result=mysqli_query($con,"select * from customerlogin where username='".$username."' AND password='".$password."'")or die(mysqli_error());
					
$row=mysqli_fetch_assoc($result);
if($username==$row['username'] && $password==$row['password'] ){
	session_start();  
    $_SESSION['sess_user']=$user;  
//     
  
    /* Redirect browser */  
   header("Location:book2.php"); 
	
}else
{
	echo"<script>alert('Please confirm Your username/password');window.location.href='book2.php'</script>";
//    redirect('book2.php');
   
	
}