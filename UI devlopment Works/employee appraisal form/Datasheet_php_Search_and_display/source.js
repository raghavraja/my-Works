function myFunction()
{
	var name = document.getElementById("parameters");
	var strike = name.value;
	
	if(strike <= 1)
	{
		document.getElementById("score").value="Does not Meet Expectations";
		document.getElementById("description").style.display = "none";
	}
	
	else if (strike <= 2)
	{
		document.getElementById("score").value="Mostly Meets Expectations";
		document.getElementById("description").style.display = "none";
	}
	
	else if (strike <= 3)
		
		{
			document.getElementById("score").value="Meets Expectations";
			document.getElementById("description").style.display = "none";
		}
	
	else if (strike  <= 5)
		
		{
			document.getElementById("score").value="Exceeds Expectations";
			document.getElementById("description").style.display = "block";
		}
		
	else if (strike > 5)
        
		{
			document.getElementById("score").value="Outstanding";
			document.getElementById("description").style.display = "block";
		}			
	
	else
	{
		document.getElementById("score").value="";
	}
		
}

/*first set end */

		
/* second set end */
function gama()
{
var a = document.getElementById("ark");
var b = a.value;

if(b < 97)
{
document.getElementById("ssm").value="Does not Meet Expectations";
document.getElementById("max").style.display = "none";

}

else if( b <= 99)
{
document.getElementById("ssm").value="Mostly Meets Expectations"
document.getElementById("max").style.display = "none";
}

else if (b <= 99.50)
{
document.getElementById("ssm").value="Exceeds Expectations"
document.getElementById("max").style.display = "block";

}
else if (b >99.50)
{
document.getElementById("ssm").value="Outstanding"
document.getElementById("max").style.display = "block";

}

else

{
document.getElementById("ssm").value="";
document.getElementById("max").style.display = "none";

}


}

/* third set start */
function sky()
{
var a = document.getElementById("before");
var b = a.value;

if(b == "no")
{
document.getElementById("alpha").value="Does not Meet Expectations";
document.getElementById("marks").style.display = "none";

}

else if( b == 1)
{
document.getElementById("alpha").value="Mostly Meets Expectations"
document.getElementById("marks").style.display = "none";
}

else if (b == 2)
{
document.getElementById("alpha").value="Meets Expectations"
document.getElementById("marks").style.display = "none";

}
else if (b == 3)
{
document.getElementById("alpha").value="Exceeds Expectations"
document.getElementById("marks").style.display = "block";

}

else if (b == 4)
{
document.getElementById("alpha").value="Outstanding"
document.getElementById("marks").style.display = "block";

}

else

{
document.getElementById("alpha").value="";
document.getElementById("marks").style.display = "none";

}


}
/* third set end */
/* fourth set star */
function beta()
{
var a = document.getElementById("ball");
var b = a.value;

if(b == "no")
{
document.getElementById("king").value="Does not Meet Expectations";
document.getElementById("mrc").style.display = "none";

}

else if( b == 1)
{
document.getElementById("king").value="Mostly Meets Expectations"
document.getElementById("mrc").style.display = "none";
}

else if (b == 2)
{
document.getElementById("king").value="Meets Expectations"
document.getElementById("mrc").style.display = "none";

}
else if (b == 3)
{
document.getElementById("king").value="Exceeds Expectations"
document.getElementById("mrc").style.display = "block";

}

else if (b == 4)
{
document.getElementById("king").value="Outstanding"
document.getElementById("mrc").style.display = "block";

}

else

{
document.getElementById("king").value="";
document.getElementById("mrc").style.display = "none";

}


}

/* fourth set end */
/* v section start */
function ray()
{
var a = document.getElementById("blank");
var b = a.value;

if(b <= 5)
{
document.getElementById("fit").value="Does not Meet Expectations";
document.getElementById("shine").style.display = "none";

}

else if( b <= 6)
{
document.getElementById("fit").value="Mostly Meets Expectations"
document.getElementById("shine").style.display = "none";
}

else if (b <= 8)
{
document.getElementById("fit").value="Meets Expectations"
document.getElementById("shine").style.display = "none";

}
else if (b <= 10)
{
document.getElementById("fit").value="Exceeds Expectations"
document.getElementById("shine").style.display = "block";

}

else if (b >= 11)
{
document.getElementById("fit").value="Outstanding"
document.getElementById("shine").style.display = "block";

}

else

{
document.getElementById("fit").value="";
document.getElementById("shine").style.display = "none";

}


}
/* V end */
/* sixth section start */
function micro()
{
var a = document.getElementById("rwb");
var b = a.value;

if(b == 3)
{
document.getElementById("sibe").value="Does not Meet Expectations";
document.getElementById("local").style.display = "none";

}

else if( b == 2)
{
document.getElementById("sibe").value="Mostly Meets Expectations"
document.getElementById("local").style.display = "none";
}

else if (b == 1)
{
document.getElementById("sibe").value="Meets Expectations"
document.getElementById("local").style.display = "none";

}
else if (b == 0)
{
document.getElementById("sibe").value="Outstanding"
document.getElementById("local").style.display = "none";

}

else

{
document.getElementById("sibe").value="";
document.getElementById("local").style.display = "none";

}


}
