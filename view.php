<html>
    <head><title>view details</title>
        <link rel="stylesheet" type="text/css" href="css/view.css">
    </head>
    <meta charset="utf-8">
   
    <body>
        <form action=" " method="post" enctype="multipart/form-data">
            
    <div class="main">
    <nav id="navid">
        <img src="img/logo2.jpg" class="av" width="100" height="90" >
        <ul>
            <li><a href="book.php">Back</a></li>
<!--
            <li><a href="contact1.php">Contacts</a></li>
            <li><a href="accomo.php">Accomodation</a></li>
-->
<!--            <li><a href="signup.php">Sign-up</a></li>-->
<!--            <li><a href="#open-modal">Login</a></li>-->
             </ul>
            </nav>
        </div>
 
        <?php
      $con=mysqli_connect('localhost','root','','makeyourstay')or die(mysql_error());
                $db=mysqli_select_db($con, 'makeyourstay')or die(mysql_error());
             $id=$_GET['id'];
                
         $que="create view new_room as SELECT roomname,description,room,Address,price,persons FROM `new_room_type`where id='$id'";
                
        $que_run=mysqli_query($con,$que);
            $quer="select * from new_room";
            $que_runr=mysqli_query($con,$quer);
                
        ?>
        
            <table id="room">    
            
        <?php
        while($row =mysqli_fetch_array($que_runr))
        {
            ?>
                <div class="box">
                 <p>Roomname<p>  
                    <?php echo $row['roomname']; ?></div>
                <div class="box1"><p>Desciription</p>
              <?php echo $row['description']; ?></div>
                <div class="box2"> 
                    <p>Room</p><?php echo  $row['room']; ?></div>
                <div class="box3"><p>Address</p>
                  <?php echo  $row['Address']; ?></div>
                <div class="box4"><p>Price</p><?php echo $row['price'];  ?></div>
     <div class="box5">
         <p> Persons</p><?php echo $row['persons']; ?></div>

   </table>
             <?php
    
        }
                
            ?> 
        </form>
    </body>
</html>