<html>
    <head>
    <style>
         
        input[type=text]
        {
            width: 65%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid black;
            top:0;
            
        }
        
        .button
        {
            background-color: #ffcc66;
            border: none;
            height:50 ;
            width:130;
            font-size: 15px;
            font-family:"Times new Roman";
        }
      
        
        </style>
                <title>sample 3</title>
                <link rel="Stylesheet"  href="css/contact.css">
                <script type="text/javascript" src="js/contact.js"></script>
        </head>
    <body >
        
<!--
        <button id="mybtn" ><a href="index.php">HOME</a></button>
        <div style="scroll-behavior: smooth">
           
-->
        <div class="con">
            <p><b><font size=6 ><i>Make Your Stay</i></font></b></p>
            <p class="b">Find best deals at<b> MakeYourStay </b>for Hotels on Pune.<br>MakeYourStay is a one-stop solution for booking Hotel as<br> per your need.</p>
          <table>
		<tr>
			<td width="12%">
				<img src="img/c1.jpg" height='30' width='30' name='mail'>    
			</td>
			<td>
				<font face='Times New Roman' color='black' size=3>0.5 from Balewadi Stadium
			</td><br>
		</tr>
		<tr>
			<td>
				<img src="img/c2.jpg" height='30' width='30' name='call'>
			</td>
			<td>
				<font face='Times New Roman' color='black' size=3>at Talegaon Annexe
			</td><br>
		</tr>
		<tr>
			<td>
				<img src="img/c3.jpg" height='30' width='30' name='fb'></a>
			</td>
			<td>
				<font face='Times New Roman' color='black' size=3>JW Marriot Hotel at SB rd</td>
		</tr>

    </table>
    <br><br><br>
    </div>
        <form id="feature">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242118.1419973818!2d73.72287998752533!3d18.524564859073685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1567534385567!5m2!1sen!2sin" width="400" height="410" frameborder="0" align="right"style="border:0;" allowfullscreen=""></iframe>

        </form>

<div class="a">
<br><br><br><br><br><br>
    <form id='form1'>
        <lable for="name">NAME:</lable><br>
        <input type='text'id="name"name="Name"onchange="NameValid(this.value),highlight(this)"><br>
		<lable for="name">EMAIL:</lable><br>
        <input type='text' id='mail'  onchange="EmailValid(this.value);highlight(this)"><br>
        <lable for="name">CONTACT:</lable><br>
        <input type='text' id='con' onchange="ContactValid(this.value),highlight(this)"><br>
        <lable for="name">MESSEGE:</lable><br>
        <input type='text' id='mes'>
        <br><br>
        <input type="button"name="Sumbit"button class="button" value="SEND MESSEGE" onclick="thank()">&nbsp&nbsp&nbsp
	   <input type="button"button class="button" name="Reset" value="RESET"height="50" width="130" onclick="javascript:document.forms.form1.reset()"/><br>
          <p class="b1">E:<font color="#f4d258">makemystay@gmail.com</font><br>TEL:<font color="#f4d258">2345566/23485556</font><br>MOB:<font color="#f4d258">+91 7865399011/9898504302</font></p>


     </form>
</div>

    </body>

</html>
