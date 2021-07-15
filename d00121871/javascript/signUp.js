function validateForm() 
{
  var x = document.forms["signUp"]["companyName"].value;
  if (x == "delete") 
  {
    alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(x == "drop")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(x == "alter")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(x == "update")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(x == "insert")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(x == "select")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  
  var b = document.forms["signUp"]["address1"].value;
  
  if (b == "delete") 
  {
    alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(b == "drop")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(b == "alter")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(b == "update")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(b == "insert")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(b == "select")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  
  var c = document.forms["signUp"]["address2"].value;
  
  if (c == "delete") 
  {
    alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(c == "drop")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(c == "alter")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(c == "update")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(c == "insert")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(c == "select")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  
   var d = document.forms["signUp"]["address3"].value;
  
  if (d == "delete") 
  {
    alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(d == "drop")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(d == "alter")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(d == "update")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(d == "insert")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(d == "select")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  
   var e = document.forms["signUp"]["psw"].value;
  
  if (e == "delete") 
  {
    alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(e == "drop")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(e == "alter")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(e == "update")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(e == "insert")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(e == "select")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
}

function checkPassword()
{
	document.getElementById("showPasswordValidity").className = "empty";
	
	var theStrength = 0;
	var pwd = document.getElementById("psw").value;
	var pwdLength = pwd.length;
	
	if(pwdLength >=8)
	{
		theStrength+=10;
	}
	
	var upperC = 0;
	
	for(i=0; i< pwd.length; i++)
	{
		if((pwd.charAt(i)>= 'A') && (pwd.charAt(i) <= 'Z'))
		{
		upperC++;
		}
		
	}
	if(upperC >0)
	{
		theStrength+=10;
	}
	
	var numNum = 0;
	
	for(g=0; g<pwd.length; g++)
	{
		if((pwd.charAt(g)>=0) && (pwd.charAt(g)<= 8))
		{
			numNum++;
		}
	}
	
	if(numNum > 1)
	{
		theStrength+=10;
	}
	
	
	var specCh = 0;
	
	for(j=0; j<pwd.length; j++)
	{
		if ((pwd.charAt(j) == '@') || (pwd.charAt(j) == '#'))
		{
			specCh++;
		}
		
	}
	
	if (specCh >0)
	{
		theStrength+=10;
	}
	
	if(theStrength == 0)
	{
		document.getElementById("showPasswordValidity").className = "veryBad";
		document.getElementById("showPasswordValidity").innerHTML = "";
		
	}
	else if (theStrength == 10)
	{
		document.getElementById("showPasswordValidity").className = "bad";
		document.getElementById("showPasswordValidity").innerHTML = "";
		
	}
	else if(theStrength==20)
	{
		document.getElementById("showPasswordValidity").className = "medium";
		document.getElementById("showPasswordValidity").innerHTML = "";
		
	}
	else if(theStrength==30)
	{
		document.getElementById("showPasswordValidity").className = "good";
		document.getElementById("showPasswordValidity").innerHTML = "";
		
	}
	else if (theStrength == 40)
	{
		document.getElementById("showPasswordValidity").className = "valid";
		document.getElementById("showPasswordValidity").innerHTML = "";
	}
}

function clearForm()
{
	window.location.reload();
}
