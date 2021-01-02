function validation()
{
	var uname=document.getElementById('uname').value;
	var name=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var phone=document.getElementById('phone').value;
	var pass=document.getElementById('pass').value;
	var cnfpass=document.getElementById('cnfpass').value;

	if(uname=="")
	{
		document.getElementById('suname').innerHTML=" ** Please fill this field ** ";
		return false;
	}
	else if((uname.length < 3) ||  (uname.length >20))
	{
		document.getElementById('suname').innerHTML=" ** Username should have 3 to 20 characters only ** ";
		return false;
	}
	else
	{
	   document.getElementById('suname').innerHTML="";	
	}
	if(name=="")
	{
		document.getElementById('sname').innerHTML=" ** Please fill this field ** ";
		return false;
	}
	else if((name.length < 3) ||  (name.length >20))
	{
		document.getElementById('sname').innerHTML=" ** Name should have 3 to 20 characters only ** ";
		return false;
	}
	else if(!isNaN(name))
	{
		document.getElementById('sname').innerHTML=" ** Only characters are allowed ** ";
		return false;
	}
	else
	{
	   document.getElementById('sname').innerHTML="";	
	}
	if(email=="")
	{
		document.getElementById('semail').innerHTML=" ** Please fill this field ** ";
		return false;
	}
	else if((email.indexOf('@')<=0))
	{
		document.getElementById('semail').innerHTML=" ** Please enter email in correct format ** ";
		return false;
	}
	else if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.'))
	{
		document.getElementById('semail').innerHTML=" ** Please enter email in correct format ** ";
		return false;
	}
	else
	{
	   document.getElementById('semail').innerHTML="";	
	}
	if(phone=="")
	{
		document.getElementById('sphone').innerHTML=" ** Please fill this field ** ";
		return false;
	}
	else if(isNaN(phone))
	{
		document.getElementById('sphone').innerHTML=" ** Characters are not allowed ** ";
		return false;
	}
	else if(phone.length!=10)
	{
		document.getElementById('sphone').innerHTML=" ** Only 10 digits are allowed ** ";
		return false;
	}
	else
	{
	   document.getElementById('sphone').innerHTML="";	
	}
	if(pass=="")
	{
		document.getElementById('spass').innerHTML=" ** Please fill this field ** ";
		return false;
	}
	else if((pass.length<5) || (pass.length>20))
	{
		document.getElementById('spass').innerHTML=" ** Password should have 5 to 20 characters only ** ";
		return false;
	}
	else
	{
	   document.getElementById('spass').innerHTML="";	
	}
	if(cnfpass=="")
	{
		document.getElementById('scnfpass').innerHTML=" ** Please fill this field ** ";
		return false;
	}
	else if(pass!=cnfpass)
	{
		document.getElementById('scnfpass').innerHTML=" ** Passwords doesn't match ** ";
		return false;
	}
	else
	{
	   document.getElementById('scnfpass').innerHTML="";	
	}

}