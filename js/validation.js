var errname=document.getElementById("errname");
var erradd=document.getElementById("erradd");
var errcont=document.getElementById("errcont");
var errmail=document.getElementById("errmail");
var erruser=document.getElementById("erruser");
var errpass=document.getElementById("errpass");
var repasser=document.getElementById("repasser");
function genError()
{
	var name=register.name.value;
	var add=register.address.value;
	var cont=register.contact.value;
	var email=register.email.value;
	var user=register.username.value;
	var pass=register.password.value;
	var repass=register.repass.value;
	if(name=="")
	{
		errname.style.border="1px solid red";
		errname.innerHTML="This field is required";
		return false;
	}
	else if(!name.match(/^([a-zA-Z ]+)$/))
	{
		errname.style.border="1px solid red";
		errname.innerHTML="Enter a valid name";
		return false;
	}
	else
	{
		errname.style.border="";
		errname.innerHTML="";
	}
	
	if(add=="")
	{
		erradd.style.border="1px solid red";
		erradd.innerHTML="This field is required";
		return false;
	}
	else
	{
		erradd.style.border="";
		erradd.innerHTML="";
	}
	
	if(cont=="")
	{
		errcont.style.border="1px solid red";
		errcont.innerHTML="This field is requierd";
		return false;
	}
	else if(!cont.match(/^([0-9])*$/))
	{
		errcont.style.border="1px solid red";
		errcont.innerHTML="Enter valid phone no.";
		return false;
	}
	else
	{
		errcont.style.border="";
		errcont.innerHTML="";
	}
	
	if(email=="")
	{
		errmail.style.border="1px solid red";
		errmail.innerHTML="This field is required";
		return false;
	}
	else if(!email.match(/^([a-zA-Z0-9]+)@([a-zA-Z0-9]+)\.([a-zA-Z0-9]+)$/))
	{
		errmail.style.border="1px solid red";
		errmail.innerHTML="Enter a valid e-mail ID";
		return false;
	}
	else
	{
		errmail.style.border="";
        errmail.innerHTML="";
		if(window.XMLHttpRequest)
		{
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET",URL,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4)
			{
				recieve_msg=xmlhttp.responseText;
				if(recieve_msg=="")
				{
					document.getElementById("errmail").style.border="";
					document.getElementById("errmail").innerHTML="";
				}
				else
				{
					document.getElementById("errmail").style.border="1px solid red";
					document.getElementById("errmail").innerHTML=recieve_msg;
				}
			}
		}
		
	}
	
	if(user=="")
	{
		erruser.style.border="1px solid red";
		erruser.innerHTML="This field is required";
		return false;
	}
	else if(!user.match(/^([a-zA-Z0-9]+)([@!#$%_]*)$/))
	{
		erruser.style.border="1px solid red";
		erruser.innerHTML="Enter a valid username";
		return false;
	}
	else
	{
		erruser.style.border="";
		erruser.innerHTML="";
	}
	
	if(pass=="")
	{
		errpass.innerHTML="This field is required";
		errpass.style.border="1px solid red";
		return false;
	}
	else if(pass<=7)
	{
		errpass.innerHTML="Weak";
		errpass.style.border="1px solid red";
		return false;
	}
	else
	{
		if(pass.match(/^[a-zA-Z0-9]*$/) == pass.match(/^[@#$]+$/))
		{
			errpass.innerHTML="Very Strong";
		    errpass.style.border="1px solid green";
			errpass.style.color="green";
		    
		}
		else
		{
			errpass.innerHTML="Strong";
		    errpass.style.border="1px solid blue";
			errpass.style.color="blue";
		}
	}

	if(repass!=pass)
	{
		repasser.style.border="1px solid red";
		repasser.innerHTML="Should be same as password!";
		return false;
	}
	else
	{
		repasser.style.border="";
		repasser.innerHTML="";
	}
	return true;
}

function gen_NameErr()
{
	var name=register.name.value;
	var add=register.address.value;
	var cont=register.contact.value;
	var email=register.email.value;
	var user=register.username.value;
	var pass=register.password.value;
	var repass=register.repass.value;
	if(name=="")
	{
		errname.style.border="1px solid red";
		errname.innerHTML="This field is required";
		return false;
	}
	else if(!name.match(/^([a-zA-Z ]+)$/))
	{
		errname.style.border="1px solid red";
		errname.innerHTML="Enter a valid name";
		return false;
	}
	else
	{
		errname.style.border="";
		errname.innerHTML="";
	}
}

function gen_AddErr()
{
	var name=register.name.value;
	var add=register.address.value;
	var cont=register.contact.value;
	var email=register.email.value;
	var user=register.username.value;
	var pass=register.password.value;
	var repass=register.repass.value;
	if(add=="")
	{
		erradd.style.border="1px solid red";
		erradd.innerHTML="This field is required";
		return false;
	}
	else
	{
		erradd.style.border="";
		erradd.innerHTML="";
	}
}

function gen_ContErr()
{
	var name=register.name.value;
	var add=register.address.value;
	var cont=register.contact.value;
	var email=register.email.value;
	var user=register.username.value;
	var pass=register.password.value;
	var repass=register.repass.value;
	if(cont=="")
	{
		errcont.style.border="1px solid red";
		errcont.innerHTML="This field is requierd";
		return false;
	}
	else if(!cont.match(/^([0-9])*$/))
	{
		errcont.style.border="1px solid red";
		errcont.innerHTML="Enter valid phone no.";
		return false;
	}
	else
	{
		errcont.style.border="";
		errcont.innerHTML="";
	}
}

function gen_MailErr()
{
	var name=register.name.value;
	var add=register.address.value;
	var cont=register.contact.value;
	var email=register.email.value;
	var user=register.username.value;
	var pass=register.password.value;
	var repass=register.repass.value;
	var URL="response.php?email="+email;
	var recieve_msg="";
	var xmlhttp;
	if(email=="")
	{
		errmail.style.border="1px solid red";
		errmail.innerHTML="This field is required";
		return false;
	}
	else if(!email.match(/^([a-zA-Z0-9]+)@([a-zA-Z0-9]+)\.([a-zA-Z0-9]+)$/))
	{
		errmail.style.border="1px solid red";
		errmail.innerHTML="Enter a valid e-mail ID";
		return false;
	}
	else
	{
		if(window.XMLHttpRequest)
		{
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4)
			{
				recieve_msg=xmlhttp.responseText;
				if(recieve_msg=="")
				{
					document.getElementById("errmail").style.border="";
					document.getElementById("errmail").innerHTML="";
				}
				else
				{
					document.getElementById("errmail").style.border="1px solid red";
					document.getElementById("errmail").innerHTML=recieve_msg;
				}
			}
		}
		xmlhttp.open("GET",URL,true);
		xmlhttp.send();
	}
}

function gen_userErr()
{
}

function gen_passErr()
{
	var name=register.name.value;
	var add=register.address.value;
	var cont=register.contact.value;
	var email=register.email.value;
	var user=register.username.value;
	var pass=register.password.value;
	var repass=register.repass.value;
	if(pass=="")
	{
		errpass.innerHTML="This field is required";
		errpass.style.border="1px solid red";
		errpass.style.color="red";
		return false;
	}
	else if(pass.length<=7)
	{
		errpass.innerHTML="Weak";
		errpass.style.border="1px solid red";
		errpass.style.color="red";
		return false;
	}
	else
	{
		if(pass.match(/^[a-zA-Z0-9]*$/) == pass.match(/^[@#$]+$/))
		{
			errpass.innerHTML="Very Strong";
		    errpass.style.border="1px solid green";
			errpass.style.color="green";
		    
		}
		else
		{
			errpass.innerHTML="Strong";
		    errpass.style.border="1px solid blue";
			errpass.style.color="blue";
		}
	}
}

function gen_repassErr()
{
	var name=register.name.value;
	var add=register.address.value;
	var cont=register.contact.value;
	var email=register.email.value;
	var user=register.username.value;
	var pass=register.password.value;
	var repass=register.repass.value;
	if(repass!=pass)
	{
		repasser.style.border="1px solid red";
		repasser.innerHTML="Should be same as password!";
		return false;
	}
	else
	{
		repasser.style.border="";
		repasser.innerHTML="";
	}
}