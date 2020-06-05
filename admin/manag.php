<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
     border-radius: 5px;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
       margin-right: 40px;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
    th{
        text-align: center;
        background-color: black;
        color: white;
        height: 40%;
    }
    table,th,td{
/*          border: 1px solid black;*/
        text-align: center;
        padding: 20px;
             border-collapse: collapse;
         
    }
    table
    {
/*          margin-left: 40px;*/
    }
</style>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>


    <body onload="dispBan()">
        <div id="main">
    <nav id="navid">
        <img src="img/logo2.jpg" class="av" width="100" height="90" >
        <ul>
                        <li><a href="add.php">New Booking</a></li>
                        <li><a href="manag.php">Manage Rooms</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    </div>
<br>
        <p align="right"><a href="newroom.php"><button class="button button1">New Room Type</button></a></p><br><br>


        
        
        
        <form action=" " method="post" enctype="multipart/form-data">
            <div class="table-responsive">
            <table class="table table-striped table-hover text-center" width="50%">
                <thead class="bg-dark  text-white">
                    <tr>
                        <th>NAME</th>
                        <th>PERSON</th>
                        <th>ROOMS AVAILABLE</th>
                        <th>COST</th>
                        <th>IMAGE</th>
                        <th colspan="2">Modificatication</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $con=mysqli_connect('localhost','root','','makeyourstay')or die(mysql_error());
                $db=mysqli_select_db($con, 'makeyourstay')or die(mysql_error());

                $que="SELECT * FROM `new_room_type`";
                $que_run=mysqli_query($con,$que);
//                $r=mysqli_num_rows($que_run);
                while($row =mysqli_fetch_array($que_run))
                {
    
                    ?>
                <tr class="text-center">
                    
                    <td><?php echo $row['roomname']; ?></td>
                    <td><?php echo $row['persons']; ?></td>
                    <td><?php echo $row['room']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><img src="<?php echo $row['image']; ?>"height="100px"width="100px"></td> 
                    <td><a href="update.php ?id=<?php echo $row['id']; ?>" class="btn btn-info">Update</a></td>
                    <td><button class="btn-danger btn" ><a href="delete.php ?rn=<?php echo $row['roomname']; ?>" class="text-white">Delete</a></button></td>
                    
                    
                </tr>
                
                <?php
                    
                }
                
                
                ?>
                </tbody>
            </table>
            </div>
            
        </form>
        
</body>

</html>