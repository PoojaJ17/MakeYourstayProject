function NameValid(Name)
	{
		
		reg=/[0-9]/
		if (reg.test(Name))
		{
			alert('You cannot insert number in name field.')
		
		}
		else
		{
			with(document.forms.form1)
			{
				que.disabled=false
			}	
		}
	}

	function ContactValid(Cont)
	{
		reg=/^\d{11}/
		reg2=/[a-zA-Z]/
		if (reg.test(Cont) | reg2.test(Cont))
		{
			alert('You cannot insert more than 10 digits or enter characters')
		}
	}

	function highlight(element)
	{

		element.style.color='silver'
  
	}
	
	function EmailValid(mail)
	{
		var valid =mail.indexOf('@')     
		var c= mail.indexOf('.com')                
		if(valid==-1 | c==-1)
		{
			alert('Please Enter Valid Email Address. ')
		}
	}
    function thank()
	{
		with(document.forms.form1)
		{
			var nam=Name.value.toUpperCase();
		}
		MyWindow = window.open('', 'Snacks list', 'titlebar=0 status=0, toolbar=0, location=0, menubar=0, directories=0, resizable=0, height=250, width=650,left=400, top=300')	
		MyWindow.document.write('<b>>>	THANK YOU <i>'+nam+ ' </i><br>Your query will be answered with in next 2 days through e-mail!!!</b><br><br>')
	}