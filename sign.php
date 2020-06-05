<!DOCTYPE html>
<html>
<head>
<style>
    fieldset
{
/*    border: 2px solid;*/
    -moz-border-radius:8px;
    border-radius: 8px;
background-color:#A9A9A9;
}
    ul li{ list-style-type: none;}
.inner{
    width:50%;
    margin: 50px auto;
}
.inner label{
    display: inline-block;
    width:150px;
    text-align: left;
    margin:5px 0;
    text-align: justify;
}
.inner input{
    min-width: 250px;
    vertical-align: middle;
    border: 1px solid #ddd;
    text-align: left;
    min-height: 30px;
}
input[type=text], input[type=password],select {
    width: 60%;
    padding: 19px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 60%;
    background-color: #000000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
}

input[type=submit]:hover {
    background-color: #F4D258;
	color:#000000;
}
input[type=reset] {
    width: 60%;
    background-color:#000000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
}

input[type=reset]:hover {
    background-color: #F4D258;
	color:#000000;
}
   

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
    <script>
       
        //document.getElementById("fname").addEventListener("focus", myFunction);
        function NameValid(fname)
	{
		
		reg=/[0-9]/
		if (reg.test(fname))
		{
			alert("You cannot insert number in name field.");
        document.getElementById('fname').style.borderColor = "red";
        return false;
		}
		else
		{
             document.getElementById("fname").onfocus = function() {NameValid()};
            document.getElementById('fname').style.borderColor = "#ccc";
            
			with(document.forms.form1)
			{
				que.disabled=false
			}
		}
	}

	function ContactValid(lname)
	{
    
		reg=/^\d{11}/
		reg2=/[a-zA-Z]/
		if (reg.test(lname) | reg2.test(lname))
		{
			alert("You cannot insert more than 10 digits or less than 10 digits or enter characters");
             document.getElementById('lname').style.borderColor = "red";
            return false;
		}
        else if(lname.length<10)
            {
             alert("You cannot insert more than 10 digits or less than 10 digits or enter characters");
             document.getElementById('lname').style.borderColor = "red";
            return false;
            }
            document.getElementById('lname').style.borderColor = "#ccc";
            
	}

	/*function highlight(element)
	{

		element.style.color='red'
  
	}
        textbox-id.style.background */
	
	function EmailValid(f)
	{
		var valid =f.indexOf('@')     
		var c= f.indexOf('.com')                
		if(valid==-1 | c==-1)
		{
			alert("Please Enter Valid Email Address. ");
            document.getElementById('f').style.borderColor="red";
		}
        else
            {
                document.getElementById('f').style.borderColor="#ccc";
            }
	}
        function check()
        {
            var password1=document.getElementById("psw").value;
                var password2=document.getElementById("pass2").value;
        if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again..."); 
                    document.getElementById('cpass').style.borderColor="red";
                    return false; 
                } 
            
                    
                   
            }
        
    function thank()
	{
		with(document.forms.form1)
		{
			var nam=Name.value.toUpperCase();
		}
		MyWindow = window.open('', 'Snacks list', 'titlebar=0 status=0, toolbar=0, location=0, menubar=0, directories=0, resizable=0, height=250, width=650,left=400, top=300')	
		MyWindow.document.write('<b>>>	THANK YOU <i>'+name+ ' </i><br>Your query will be answered with in next 2 days through e-mail!!!</b><br><br>')
	}
    </script>
    </head>
<body>
    <h1><b><center>Sign up</center></b></h1>

<div class="inner">
  <form action="process2.php" method="post" name="signup" onSubmit = "return check(this)">
      <!--form action="action.jpg" method="post" name="sign" onsubmit="return NameValid(this.value) ">
          <form action="action.jpg" method="post" name="sign" onsubmit="return EmailValid(this.value) "-->
      <fieldset>
          <ul>
              
              <li><label for="fname"><b>E-mail</b></label>
              <input type="text" id="email" name="email" placeholder="Your name E-mail.." onchange="EmailValid(this.value),highlight(this)" required ></li><br>
      
      

              <li><label for="fname"><b>Name</b></label>
        <input type="text" id="firstname" name="firstname" placeholder="Your name.."onchange="NameValid(this.value)"  required ></li><br>

              <li><label for="lname"><b>Phone</b></label>
    <input type="text" id="phn" name="phn"
           placeholder="mobile or phone number" onchange="ContactValid(this.value)" required ></li><br>
    

              <li><label for="psw"><b>Password</b></label>
    <input type="password" id="psw" name="psw"  placeholder="please enter your password" onchange="check()" required></li><br>
              <li><label for="pass"><b>Confirm Password</b></label>
      <input type="password" id="pass2" name="pass2" placeholder="Confirm Your Password.." onchange="check()" required></li><br>





              <li><p align="center"><input type="submit" value="SEND" name="submit" id="submit"  button class="button" onclick="thank()">&nbsp;</p></li>
              <li><p align="center"><input type="reset" value="RESET" onclick="javascript:document.forms.form1.reset()"></p></li>
          </ul>
      </fieldset>
</form>
    <!--/form>
    </form-->
    </div>
    </body>
 
</html>
    <!--script type="text/javascript" src="js/sg.js"></script--
</html>   