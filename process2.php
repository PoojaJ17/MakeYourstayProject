<?php

if(isset($_POST['submit']))
{
$email=$_POST['email'];
$fname=$_POST['firstname'];
$phone=$_POST['phn'];
$paswd=$_POST['psw'];
$psd=$_POST['pass2'];
    $con=mysqli_connect('localhost','root','','makeyourstay');
mysqli_select_db($con, 'makeyourstay');


$result=mysqli_query($con,"insert into signup(email,name,phone,password,cnpassword)values('$email','$fname','$phone','$paswd','$psd')")or die(mysqli_error($con));	
$re=mysqli_query($con,"insert into customerlogin(id,username,password)values('','$email','$psd')")or die(mysqli_error($con));        
    
	echo"<script>alert('Registrasion Successful');window.location.href='book3.php'</script>";

}
else
{
	header("Location:book.php"); 
}

?>
