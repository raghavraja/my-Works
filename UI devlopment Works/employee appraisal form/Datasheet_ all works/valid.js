

function validateForm()
{
	var employee   = document.forms["fname"] ["employee"].value;
	var ark = employee.value;
	var production   = document.forms["fname"] ["production"].value;
	var value1   = document.forms["fname"] ["value1"].value;
	var value2   = document.forms["fname"] ["value2"].value;
	var quality   = document.forms["fname"] ["quality"].value;
	var value4   = document.forms["fname"] ["value4"].value;
	var certification   = document.forms["fname"] ["certification"].value;
	var training   = document.forms["fname"] ["training"].value;
	var analysis   = document.forms["fname"] ["analysis"].value;
	var attendance   = document.forms["fname"] ["attendance"].value;



	if(employee == "")
	{
		document.getElementById("info").innerHTML="Enter Id";
		return false;
	}
	
	else
	{
		document.getElementById("info").innerHTML="";
		
	}
	if(production == "")
	{
		document.getElementById("base").innerHTML="Fill your Parameters";
		return false;
	}
	
	else
	{
		document.getElementById("base").innerHTML="";
		
	}
	
	if (value2 == "")
	{
		document.getElementById("base2").innerHTML="required this field";
		return false;
	}
	
	else
	{
		document.getElementById("base2").innerHTML="";
	}
	
	if(quality == "")
	{
		document.getElementById("base3").innerHTML="fill your quality";
		return false;

	}
	
	else
	{
		document.getElementById("base3").innerHTML="";
	}
	
	
	
		if(value4 == "")
	{
		document.getElementById("base4").innerHTML="required this field";
		return false;

	}
	
	else
	{
		document.getElementById("base4").innerHTML="";
	}
	
	
	if(certification == "")
	{
		document.getElementById("base5").innerHTML="Enter certification";
		return false;

	}
	
	else
	{
		document.getElementById("base5").innerHTML="";
	}
	
	
	if(training == "")
	{
		document.getElementById("base6").innerHTML="Enter Cluster ";
		return false;

	}
	
	else
	{
		document.getElementById("base6").innerHTML="";
	}
	
	
	if(analysis == "")
	{
		document.getElementById("base7").innerHTML="Enter analysis ";
		return false;

	}
	
	else
	{
		document.getElementById("base7").innerHTML="";
	}
	
	
	if(analysis == "")
	{
		document.getElementById("base7").innerHTML="Enter analysis ";
		return false;

	}
	
	else
	{
		document.getElementById("base7").innerHTML="";
	}
	
	
		if(attendance == "")
	{
		document.getElementById("base8").innerHTML="Enter attendance ";
		return false;

	}
	
	else
	{
		document.getElementById("base8").innerHTML="";
	}
	
	

	
}