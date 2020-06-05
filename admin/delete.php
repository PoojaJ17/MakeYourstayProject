<?php
session_start();
$_SESSION['msg']=' ';

$db=mysqli_connect('localhost','root','','makeyourstay')or die(mysql_error());
mysqli_select_db($db, 'makeyourstay')or die(mysql_error());
$rn=$_GET['rn'];
$q="DELETE FROM `new_room_type` WHERE `roomname`='$rn'";
mysqli_query($db,$q);


$_SESSION['msg']="Record is Deleted..";
$_SESSION['msg_type']="danger";
header('location:manag.php');


?>