<?php require_once ("db/config.php"); ?>
<html>
<head>
</head>
<body>

<?php 
if(isset($_POST['continue'])){
   $sql = "INSERT INTO `tblreservation` (`PACKAGEID`, `CUSTOMERID`, `ARRIVAL`, `DEPARTURE`, `STATUS`) VALUES('".$_SESSION['PACKAGEID']."','".  $_SESSION['CUSTOMERID']."','".  $_SESSION['from']."','".  $_SESSION['to']."','Pending')";
  $res = mysql_query($sql) or die(mysql_error());
  if($res>0){
		//unset($_SESSION['from']);
		//unset($_SESSION['to']);
		//unset($_SESSION['PACKAGEID']);
		
		// $_SESSION['msg'] = '<span style="background-color:skyblue;"><h3>Your are now successfully booked!</h3></span>';
    ?>
      <script type="text/javascript">
	  alert("Your are now successfully booked!");
      window.location = "index.php?";
      </script>
    <?php
  }else{
    $loginmsg = "Error to save! " ;
    die(mysql_error());
  }
}

?>
 <br/>
     <form method="post" action="">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Booking Details</h1>
            </div>
            <div class="col-lg-12"> 
              
                <table class="table table-hover">

             <thead>
              <tr  bgcolor="#999999">
              <!-- <th width="10">#</th> -->
              <th align="center" width="120">Room Type</th>
              <th align="center" width="120">Check In</th>
              <th align="center" width="120">Check Out</th>
              <th align="center" width="120">Price</th>
            </tr> 
          </thead>
          <tbody>
              
            <?php 
 
   
// echo $_SESSION['PACKAGEID'];


$sql = "SELECT * FROM `tblpackage` WHERE  `PACKAGEID`='". $_SESSION['PACKAGEID']."'" ;
  $cur = mysql_query($sql) or die(mysql_error());

            while ($result = mysql_fetch_array($cur)) {
                       echo '<tr>';  
                       echo '<td>'.$result['PACKAGE'].' </td>';
                       echo '<td>'.date_format(date_create($_SESSION['from']),"m/d/Y").'</td>';
                       echo '<td>'.date_format(date_create($_SESSION['to']),"m/d/Y").'</td>';
                       echo '<td > &#8369 '. $result['PRICE'] .'</td>'; 
                          echo '</tr>'; 
                      }
            ?>
          </tbody>
      
        </table> 
   
             <div class="col-xs-12 col-sm-12" align="right">
 
            
                <input type="submit" class="btn btn-primary" align="right" name="continue" value="Continue Booking">
               
        
     
               
          </div>
                  
     


          </div>
         
      </div>

  </div>
</div> 
  </form>
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
     <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
     <script type="text/javascript" src="js/bootstrap-datetimepicker.uk.js" charset="UTF-8"> </script>
<script type="text/javascript">
  $('.from').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  $('.to').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
    $(function() {
    var dates = $( "#from, #to" ).datepicker({                   
      defaultDate:'',
      changeMonth: true,
      numberOfMonths: 1,
      onSelect: function( selectedDate ) {
      var now =Date();
        var option = this.id == "from" ? "minDate" : "maxDate",
          instance = $(this).data("datepicker"),
          date = $.datepicker.parseDate(
            instance.settings.dateFormat ||
            $.datepicker._defaults.dateFormat,
            selectedDate, instance.settings );
        dates.not( this ).datepicker( "option", option, date );
      }
    });
  });
</script>
</body>
</html>