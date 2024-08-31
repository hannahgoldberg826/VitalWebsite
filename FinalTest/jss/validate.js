function validateEmail(id)
{
	var value=id.value;
	var good=true;
	if(value=="")
	{
		document.getElementById("eMsg").innerHTML="Email cannot be empty!";
		document.getElementById("eMsg").className="text-danger";
		good=false;
	}
	else if(!(/^(.+)@(.+)$/.test(value)))
	{
		document.getElementById("eMsg").innerHTML="Email is not valid!";
		document.getElementById("eMsg").className="text-danger";
		good=false;
	}
	else
		document.getElementById("eMsg").innerHTML="";
	return good;
}
function validatePay(id)
{
	var value=id.value;
	var good=true;
	if(value=="")
	{
		document.getElementById("pMsg").innerHTML="Payment cannot be empty!";
		document.getElementById("pMsg").className="text-danger";
		good=false;
	}
	else if(!(/^[1-9]\d{15}$/.test(value)))
	{
		document.getElementById("pMsg").innerHTML="Payment is not correct!";
		document.getElementById("pMsg").className="text-danger";
		good=false;
	}
	else
		document.getElementById("pMsg").innerHTML="";
	return good;
}
function validate(id)
{
	var emailId=document.getElementById("email");
	var pmtId=document.getElementById("pmt");
	return validateEmail(emailId)&&validatePay(pmtId);
}