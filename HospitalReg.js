// JavaScript Document
function B(f)
{
	if(required(f.T1,"Enter Name")==false)
	{
		f.T1.focus();
		return false;
	}
	else if(required(f.T2,"Enter Hospital Type")==false)
	{
		f.T2.focus();
		return false;
	}
	else if(required(f.T3,"Please Choose Government Type")==false)
	{
		f.T3.focus();
		return false;
	}
	else if(required(f.T4,"Please Enter address")==false)
	{
		f.T4.focus();
		return false;
	}
	else if(required(f.T5,"Please enter District")==false)
	{
		f.T5.focus();
		return false;
	}
}
function required(ele,msg)
{
	if(ele.value==null || ele.value=="")
	{
		alert(msg);
		return false;
	}
	else
	{
		return true;
	}
}