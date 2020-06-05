<?php

if(isset($_POST['submit']))
{
$email=$_POST['email'];
$fname=$_POST['fname'];
$address=$_POST['adr'];
$city=$_POST['city'];
$cardn=$_POST['cname'];
    $date=$_POST['dt1'];
    $deprtdate=$_POST['dt2'];
    $cardno=$_POST['ccnum'];
    $expmon=$_POST['expmonth'];
    $expyr=$_POST['expyear'];
    $con=mysqli_connect('localhost','root','','makeyourstay');
    mysqli_select_db($con, 'makeyourstay');


$result=mysqli_query($con,"INSERT INTO `payment`(`funame`, `email`,`adate`, `ddate`, `address`, `city`, `cardnme`, `creditno`, `expmonth`, `expyear`)values('$email','$fname','$date','$deprtdate','$address','$city','$cardn','$cardno','$expmon','$expyr')")or die(mysqli_error($con));
	
}


?>




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"rel="stylesheet"type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
    <script> 
        function EmailValid(email)
	{
		var valid =email.indexOf('@')     
		var c= email.indexOf('.com')                
		if(valid==-1 | c==-1)
		{
			alert("Please Enter Valid Email Address. ");
            document.getElementById('email').style.borderColor="red";
            document.sign.email.focus();
		}
        else
            {
                document.getElementById('email').style.borderColor="#ccc";
            }
	}
          function NameValid(fullname)
	{
		
		reg=/[0-9]/
		if (reg.test(fullname))
		{
            document.getElementById('fullname').style.borderColor = "#FF0000";
			alert("You cannot insert number in name field.");
           document.sign.fullname.focus();
        return false;
		}
        else
		{
            
            document.getElementById('fullname').style.borderColor = "#ccc";
            
			with(document.forms.form1)
			{
				que.disabled=false
			}
		}
	}
         function CityValid(city)
	{
		
		reg=/[0-9]/
		if (reg.test(city))
		{
            document.getElementById('city').style.borderColor = "#FF0000";
			alert("You cannot insert number in city field.");
           document.sign.fullname.focus();
        return false;
		}
        else
		{
            
            document.getElementById('city').style.borderColor = "#ccc";
            
			with(document.forms.form1)
			{
				que.disabled=false
			}
		}
	}
        function CardValid(cname)
	{
		
		reg=/[0-9]/
		if (reg.test(cname))
		{
            document.getElementById('cname').style.borderColor = "#FF0000";
			alert("You cannot insert number in card name field.");
           document.sign.fullname.focus();
        return false;
		}
        else
		{
            
            document.getElementById('cname').style.borderColor = "#ccc";
            
			with(document.forms.form1)
			{
				que.disabled=false
			}
		}
	}
        function CanValid(ccnum)
	{
    
		reg=/^\d{11}/
		reg2=/[a-zA-Z]/
		if (reg.test(ccnum) | reg2.test(ccnum))
		{
			alert("You cannot insert characters");
             document.getElementById('ccnum').style.borderColor = "red";
            return false;
		}
//        else if(lname.length<10)
//            {
//             alert("You cannot insert more than 10 digits or less than 10 digits or enter characters");
        else
            {
//             document.getElementById('ccnum').style.borderColor = "red";
//            return false;
            
            document.getElementById('ccnum').style.borderColor = "#ccc";
            }
            
	}
          function MonValid(expmonth)
	{
		
		reg=/[0-9]/
		if (reg.test(expmonth))
		{
            document.getElementById('expmonth').style.borderColor = "#FF0000";
			alert("You cannot insert number in month field.");
           document.sign.expmonth.focus();
        return false;
		}
        else
		{
            
            document.getElementById('expmonth').style.borderColor = "#ccc";
            
			with(document.forms.form1)
			{
				que.disabled=false
			}
		}
	}
     
        function thank()
	{
		
		MyWindow = window.open('', 'Snacks list', 'titlebar=0 status=0, toolbar=0, location=0, menubar=0, directories=0, resizable=0, height=250, width=650,left=400, top=300')	;
		MyWindow.document.write('<b>>>	THANK YOU </b><br><br>');
	}
    </script>
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
        </script> 

        </script> 
<h2>Payment</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action=" " method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="John M. Doe" onchange="NameValid(this.value)" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" onchange="EmailValid(this.value)" required>
              <label for="Arrivial Date">Arrivial Date</label>
            <input type="text" id="dt1" name="dt1" placeholder="" required>
              
              <label for="Departure Date">Departure Date</label>
            <input type="text" id="dt2" name="dt2" placeholder="" required>
            
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="adr" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" onchange="CityValid(this.value)" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="John More Doe" onchange="CardValid(this.value)" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="ccnum" placeholder="1111-2222-3333-4444" onchange="CanValid(this.value)" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" onchange="MonValid(this.value)" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Accepted terms & conditions        </label>
        <input type="submit" value="Book" class="btn"name="submit"id="submit"onclick="thank()">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
        <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"> </i></span></h4>
         <?php
                $con=mysqli_connect('localhost','root','','makeyourstay')or die(mysql_error());
                $db=mysqli_select_db($con, 'makeyourstay')or die(mysql_error());
                $id=$_GET['id'];
                $que="SELECT * FROM `new_room_type`where id='$id'";
                $que_run=mysqli_query($con,$que);
//                $r=mysqli_num_rows($que_run);
                while($row =mysqli_fetch_array($que_run))
                {
    
                    ?>
               
      <p>Total <span class="price" style="color:black"><?php echo $row['price']; ?></span></p>
   <?php
                    
                }
                
                
                ?>
  </div>
</div>
    </div>
</body>
</html>
