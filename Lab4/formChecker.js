function validate()
{
	var username=document.getElementById("user").value;
	var password=document.getElementById("pass").value;

	var shirt=document.getElementById("shirt").value;
	var pant=document.getElementById("pant").value;
	var hat=document.getElementById("hat").value;

	var shipping=document.getElementsByName("ship");
	var check=false;
	var cs="n";
	//Help from online to check array of radio.
	for(var i=0; i<shipping.length;i++)
	{
		if(shipping[i].checked)
		{
			cs=shipping[i].value;
		}
	}
	if(username.indexOf('@')< 0)
	{
		alert("Please enter in a email. (Page will refresh)");
		check=true;
	}
	if(password.length==0)
	{
		alert("Enter in a password (Page will refresh)");
		check=true;
	}
	if(shirt.length==0)
	{
		alert("Enter in an amount of shirts. (Page will refresh)");
		check=true;
	}
	if(pant.length==0)
	{
		alert("Enter in an amount of pants. (Page will refresh)");
		check=true;
	}
	if(hat.length==0)
	{
		alert("Enter in an amount of hats. (Page will refresh)");
		check=true;
	}
	if(cs=="n")
	{
		alert("Enter in a shipping type. (Page will refresh)");
		check=true;
	}
	if(check==true)
	{
		check==false;
		document.getElementById("formA").action="customerFrontend.html";
	}
	
}
