<?php

session_start();
$_SESSION['msg']=' ';
$db=mysqli_connect('localhost','root','','makeyourstay')or die(mysql_error());
mysqli_select_db($db, 'makeyourstay')or die(mysql_error());

if (isset($_POST['submit'])) {
    
    
    $rname= mysqli_real_escape_string($db,$_POST['roomname']);
    $desc= mysqli_real_escape_string($db,$_POST['description']);
    $addr= mysqli_real_escape_string($db,$_POST['Address']);
    $depar= mysqli_real_escape_string($db,$_POST['deparch']);
    
    $retun=mysqli_real_escape_string($db,$_POST['return']);
    $maxp= mysqli_real_escape_string($db,$_POST['persons']);
    $price= mysqli_real_escape_string($db,$_POST['price']);
    $avail= mysqli_real_escape_string($db,$_POST['room']);
    $name= addslashes($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
     $image_path = 'upload/'.$_FILES['image']['name'];
     
    
         
         if(preg_match("!image!",$_FILES['image']['type']))
         {
             if(copy($_FILES['image']['tmp_name'],$image_path))
             {
                 $SEESION['roomname']=$rname;
                 $SEESION['image']=$image_path;
                 $sql=mysqli_query($db,"INSERT INTO `new_room_type`(`roomname`, `description`, `Address`, `deparch`, `return`, `persons`, `room`, `price`, `image`, `img_name`) VALUES ('$rname','$desc','$addr','$depar','$retun','$maxp','$avail','$price','$image_path','$name')")or die(mysqli_error($db)); 
                 
                 if(is_uploaded_file($_FILES['image']['tmp_name']))
                    {
                        move_uploaded_file($_FILES['image']['tmp_name'],$image_path) ;
                    }
                 else
                 {
                    $_SESSION['msg']="couldn't added";
                 }
             }
             else
             {
                  $_SESSION['msg']="file upload fail";
             }
         }
    else
    {
         $_SESSION['msg']="please upload only images..";
    }

}

?>