
<!DOCTYPE html>
<html>
<head>
    
    <title>Make Your Stay</title>
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
</style>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
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
    
    <p align="right"><a href="newroom.php"><button class="button button1">Confirm Booking</button></a></p><br><br>
     </body>
</html>