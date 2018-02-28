function enter()
{
var name=document.fname.username.value;
var mail=document.fname.mail.value;
var phone=document.fname.phone.value;
var pas=document.fname.pass.value;
var pws=document.fname.pws.value;

if(name=="")
{
    document.getElementById("error_uname").innerHTML="please enter your name";
    document.fname.username.focus();
	}
	
	else
	{
	document.getElementById("error_name").innerHTML="";
	}
	
	if(mail=="")
{
    document.getElementById("error_mail").innerHTML="please enter your mail";
    document.fname.username.focus();
	}
	
	else
	{
	document.getElementById("error_phone").innerHTML="";
	}
		if(mail=="")
{
    document.getElementById("error_phone").innerHTML="please enter your phone number";
    document.fname.username.focus();
	}
	
	else
	{
	document.getElementById("error_mail").innerHTML="";
	}
		if(pas=="")
{
    document.getElementById("error_pass").innerHTML="please enter your password";
    document.fname.username.focus();
	}
	
	else
	{
	document.getElementById("error_pass").innerHTML="";
	}
		if(pws=="")
{
    document.getElementById("error_pws").innerHTML="please enter your confirm password";
    document.fname.username.focus();
	}
	
	else
	{
	document.getElementById("error_pws").innerHTML="";
	}
	
	
}

