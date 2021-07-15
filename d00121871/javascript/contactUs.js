function validateForm() 
{
  var x = document.forms["query"]["queryName"].value;
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
  
  var a = document.forms["query"]["comment"].value;
  
  if (a == "delete") 
  {
    alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(a == "drop")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(a == "alter")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(a == "update")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(a == "insert")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else if(a == "select")
  {
	alert("Error! Please try again!");
	window.location.reload();
    return false;
  }
  else
  {
	 alert("Your Query has been submitted. Our team will be in contact shortly.");
    return true; 
  }
}
