<?php

$_SESSION['msg']=' ';

include("upload.php");
?>
<html>
<head>
    <title>Room Details</title>
    <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
    border-radius: 5px;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
</style>
 <link rel="stylesheet" type="text/css" href="css/booking.css">
    
<!--
    <link rel="stylesheet" type="text/css" href="css/booking.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"rel="stylesheet"type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    </head>
    <body>
<script type="text/javascript">
            $(document).ready(function () {

    $("#dt1").datepicker({
         dateFormat: "yy-mm-dd",
        timePicker: true,
        minDate: 0,
        onSelect: function (date) {
            var dt2 = $('#dt2');
            var startDate = $(this).datepicker('getDate');
            var minDate = $(this).datepicker('getDate');
            dt2.datepicker('setDate', minDate);
            startDate.setDate(startDate.getDate() + 30);
            //sets dt2 maxDate to the last day of 30 days window
            dt2.datepicker('option', 'maxDate', startDate);
            dt2.datepicker('option', 'minDate', minDate);
            $(this).datepicker('option', 'minDate', minDate);
        }
    });
    $('#dt2').datepicker({
        dateFormat: "yy-mm-dd"
    });
});
    function f1()
    {
        alert("Hotel Rooms Added Successfully..");
    }
        </script> 
<!--      <p align="right" text-align="center"><a href="manag.php"><button class="button button1"><img src="img/back1.png" height="30" width="30"> Back</button></a></p>-->

        <a href="manag.php"><input type="image"src="img/back1.png" height="80" width="80"></a>
        <div class="inner">
            <div class="alert alert-error"><?php $_SESSION['msg']?></div>
        <form action=" " method="post"id="uplo" enctype="multipart/form-data" >
            <fieldset>
                <legend>Room Details:</legend>
                <ul>
                    <li><input type="hidden" name="id" id="id"><br><br></li>
                    <li>
                        <b><label for="username">Name:</label></b><textarea rows="2" cols="32" name="roomname" id="name" placeholder="Ex.Double room on the ground floor" pattern="[a-zA-z]{3,}" title="please enter more than three letters" required></textarea><br><br></li>
                    <li><b> <label for="address">Address:</label></b><textarea rows="2" cols="32" name="Address" id="textarea" placeholder="" required></textarea><br><br></li>
                    <li><b> <label for="description">Description:</label></b><textarea rows="3" cols="32" name="description" id="textarea" placeholder="" required></textarea><br><br></li>
                     <li><b> <label for="date">Room Available Date:</label></b><br><br>
                         <input type="text"id="dt1" name="deparch" placeholder="Deparch Date">
                    <input type="text"id="dt2" name="return" placeholder="Return Date"></li><br>

               <!-- <label for="description">Max Person:<input type="textarea" rows="4" cols="50" name="description" placeholder="please fill the information about room" pattern="[a-zA-z]" title="Alphadets allowed only">-->
                    <li><b><label for="max">Maximum Persons:</label></b><select name="persons" required>
                      <option value="Person1">Person1</option>
                      <option value="Person2">Person2</option>
                      <option value="Person3">Person3</option>
                     </select><br><br></li>
                    <li><b><label for="room">Available Rooms:</label><input type="text" name="room" id="room" placeholder="Enter Available rooms" pattern="{.5}" title="5 rooms or more than that" required></b><br><br></li>
                    <li><b><label for="price">Price Per day:</label></b><input type="text" name="price" id="price" placeholder="Enter the price"><br><br></li>
                    <li><b><label for="image" required>Image:</label></b>  <input type="file" id="image" name="image"multiple accept=".jpg, .png, .gif" >
<!--
                <li><input  name="upload" value="upload" id="upload" type="submit"></li>
                    <br><br>
-->
                         <br><br><br>
                    <div class="submit">
                    <li><input  name="submit" value="submit" id="submit" type="submit" onclick="f1()"></li>
                        
                    </div>
                </ul>
            </fieldset>
        </form>
        </div>
    </body>
</html>
<!--
<script>
    $(document).ready(function()
                     {
        $('#uplo').on('submit',function(event){
            event.preventDefault();
            var image_name=$('#image').val();
            if(image_name==''){
                alert("Please select Image");
                return false;
            }
            else
                {
                    $.ajax({
                       url:"upload.php",
                        method:"POST",
                        data:new FormData(this),
                        contentType:false;
                        cache:false;
                        processData:false;
                        success:function(data)
                        {
                        $
                    }
                    });
                }
        })
    });
    </script>-->
