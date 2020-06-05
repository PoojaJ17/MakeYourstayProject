<html>
    <head>
    <title>Make Your Stay</title>
        <style>
table,th,td{
        
        padding: 15px;
    }
    table
    {
          margin-left: 1px;
    
    }
#b1{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
    border-radius: 4px; 
            } 
#b2{
  border: none;
  color: black;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: white; 
  border: 2px solid #CCC;
  border-radius: 4px; 
            }
            </style>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"rel="stylesheet"type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
    <link rel="stylesheet" type="text/css" href="css/book.css">
    </head>
    <body >
        <script type="text/javascript">
            $(document).ready(function () {

    $("#dt1").datepicker({
        dateFormat: "dd-M-yy",
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
        dateFormat: "dd-M-yy"
    });
});
        </script> 
        <div class="main">
    <nav id="navid">
        <img src="img/logo2.jpg" class="av" width="100" height="90" >
        <ul>
            <li><a href="book.php">Home</a></li>
            <li><a href="contact1.php">Contacts</a></li>
            <li><a href="accomo.php">Accomodation</a></li>
<!--            <li><a href="signup.php">Sign-up</a></li>-->
            <li><a href="logout.php">Logout</a></li>
            
 
       
	
<div id="open-modal" class="modal-window">
  <div>
    <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
        <p><form action="process.php" method="post">
      <h2><center>Login </center></h2>
    Email:<input type="text" id="email" name="user" placeholder="Your name E-mail.." required >
  Password: <input type="password" id="password1" name="pass" placeholder="Enter Password.." required ><br>

      <button id="btn1" value="Submit" name="Submit">Submit</button>
       
</form>
      
       
  </div>    
    </div>
  
  
    <!--div id="open-modal" class="modal-window"-->
<!--        <a href="#open-model1">Sign up</a>-->
     

        </ul>
            </nav>
        </div>
         
      <br>
        
        <form action=" " method="post" enctype="multipart/form-data">
            
            <table class="table table-border table-striped table-hover text-center" width="50%">
<!--
                <col width="10%">
                <col width="100%">
-->
                
<!--
                    <tr>
                        <th></th>
                        <th rowspan="3"></th>
                        
                    </tr>
-->
                
               
                <?php
                $con=mysqli_connect('localhost','root','','makeyourstay')or die(mysql_error());
                $db=mysqli_select_db($con, 'makeyourstay')or die(mysql_error());
                 
                $que="SELECT * FROM `new_room_type`";
                $que_run=mysqli_query($con,$que);
                
    
//                $r=mysqli_num_rows($que_run);
                while($row =mysqli_fetch_array($que_run))
                    
                {
                    $img='admin/'.$row['image'];
                    ?>
                
        <table width="95%"  >
                       <tr>
                        <td ><img src="<?php echo $img; ?>"height="250px"width="380px"></td>
                           <td  valign="top" ><b><font size="5" text-align=top><?php echo $row['roomname']; ?></font></b><br><br><br>
                               <span style="font-style:arial;font-size:98%;padding:8px 0px" ><?php echo $row['Address']; ?></span><br><br><br>
                       <b>Price-</b><?php echo $row['price']; ?></td>
                           <td ><a href="view.php?id=<?php echo $row['id']; ?>"><input type="button" id="b2"value="ViewDetails"></a></td>
                           <td align="left"><a href="payment.php?id=<?php echo $row['id']; ?>"><input type="button" id="b1" value="Book"></a></td>
                            
                    </tr>
                </table>
        
        
                
                <?php
                    
                }
                
                
                ?>
                
            </table>
        </form>
    </body>
</html>
