<!DOCTYPE html>
<html>
<head>
<style>
     fieldset
{
/*    border: 2px solid;*/
    -moz-border-radius:8px;
    border-radius: 5px;
background-color:#CCC;
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
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #000000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #F4D258;
	color:#000000;
}
input[type=reset] {
    width: 100%;
    background-color:#000000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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
        function NameValid(firstname)
	{
		
		reg=/[0-9]/
		if (reg.test(firstname))
		{
            document.getElementById('firstname').style.borderColor = "#FF0000";
			alert("You cannot insert number in name field.");
           document.sign.firstname.focus();
        return false;
		}

		{
            
            document.getElementById('firstname').style.borderColor = "#ccc";
            
			with(document.forms.form1)
			{
				que.disabled=false
			}
		}
	}

	function ContactValid(phn)
	{
    
		reg=/^\d{11}/
		reg2=/[a-zA-Z]/
		if (reg.test(phn) | reg2.test(phn))
		{
            document.getElementById('phn').style.borderColor = "red";
			alert("You cannot enter characters");
            document.sign.phn.focus();
            return false;
		}
        else if(phn.length<10)
            {
             alert("You cannot insert more than 10 digits or less than 10 digits");
             document.getElementById('phn').style.borderColor = "red";
                document.sign.phn.focus();
            return false;
            }
            else
                {
                   return true; 
                }
            
	}

	/*function highlight(element)
	{

		element.style.color='red'
  
	}
        textbox-id.style.background */
	
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
        function check()
        {
            var password1=document.getElementById("psw").value;
                var password2=document.getElementById("pass2").value;
        if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again..."); 
                    document.getElementById('pass2').style.borderColor="red";
                        document.sign.pass2.focus();
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
       /* function NameValid(firstname)
	{
		
		reg=/[0-9]/
		if (reg.test(firstname))
		{
			alert("You cannot insert number in name field.");
		
		}
		else
		{
			with(document.forms.form1)
			{
				que.disabled=false
			}	
		}
	}

	function ContactValid(phn)
	{
		reg=/^\d{11}/
		reg2=/[a-zA-Z]/
		if (reg.test(phn) | reg2.test(phn))
		{
			alert("You cannot insert more than 10 digits or enter characters");
		}
	}

	function highlight(element)
	{

		element.style.color='silver'
  
	}
	
	function EmailValid(email)
	{
		var valid =email.indexOf('@')     
		var c= email.indexOf('.com')                
		if(valid==-1 | c==-1)
		{
            
			alert("Please Enter Valid Email Address. ");
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
        
            function check()
        {
            var password1=document.getElementById("psw").value;
                var password2=document.getElementById("pass2").value;
        if (password1 != password2) { 
                     alert ("\nPassword did not match: Please try again...")
               
                    return false; 
                } 
            else
                {
                    return true;
                     }
        }
    */
    </script>
    
<body>
<br>
<h2><center>Sign up</center></h2>


   <div class="inner">
  <form action="process2.php" method="post" name="sign" >
      <!--form action="action.jpg" method="post" name="sign" onsubmit="return NameValid(this.value) ">
          <form action="action.jpg" method="post" name="sign" onsubmit="return EmailValid(this.value) "-->
       <fieldset>
           <ul>
	<li><label for="fname">E-mail</label>
        <input type="text" id="email" name="email" placeholder="Your name E-mail.." onchange="EmailValid(this.value)" required ></li>
      
      

    <li><label for="fname">Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="Your name.."onchange="NameValid(this.value)"  required ></li>

    <li><label for="lname">Phone</label>
    <input type="text" id="phn" name="phn"
           placeholder="mobile or phone number" pattern="[789][0-9]{9}" onchange="ContactValid(this.value)" required ></li>
    

<li><label for="psw">Password</label>
    <input type="password" id="psw" name="psw"  placeholder="please enter your password"  required></li>
  <li><label for="pass">Confirm Password</label>
      <input type="password" id="pass2" name="pass2" placeholder="Confirm Your Password.." onchange="check();" required></li>





               <li><input type="submit" value="SEND" name="submit" button class="button"></li>
               <li><input type="reset" value="RESET" onclick="javascript:document.forms.form1.reset()"></li>
           </ul>
           </fieldset>

</form>
          
    <!--/form>
    </form-->
    </div>
    </body>
    </head>
</html>
    <!--script type="text/javascript" src="js/sg.js"></script--
</html>   