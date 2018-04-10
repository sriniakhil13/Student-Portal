function name_out(){
	var x = document.forms["register-form"]["name"].value;
	var x_len=x.length;
	var regex=/^[0-9]+$/;
    if (x.match(regex))
	{
		document.forms["register-form"]["name"].style.border ="2px solid red";
		document.forms["register-form"]["name"].value ="";
		document.forms["register-form"]["name"].placeholder = "please enter a valid name";
		return false;
	}
	if (x == "") {
        document.forms["register-form"]["name"].placeholder = "Full name cannot be blank";
		document.forms["register-form"]["name"].style.border ="2px solid red";
		return false;
    
    }
	
	if(x_len < 4 || x_len >20)
	{
		alert("Name must be between 5 and 20 characters!")
		return false;
	}
	return true;
}

function name_in(){
	var x = document.forms["register-form"]["name"].value;
	if(x == "")
	{
		document.forms["register-form"]["name"].style.backgroundColor ="#01EDFE";
		document.forms["register-form"]["name"].placeholder = "Full name";
		document.forms["register-form"]["name"].style.border ="none";
	}
	
}
function username_out(){
	var x = document.forms["register-form"]["username"].value;
	var x_len=x.length;
	var regex=/^@\,.[]+$/;
    if (x.match(regex))
	{
		document.forms["register-form"]["username"].style.border ="2px solid red";
		document.forms["register-form"]["username"].value ="";
		document.forms["register-form"]["username"].placeholder = "please enter a valid username";
		return false;
	}
	if (x == "") {
        document.forms["register-form"]["username"].placeholder = "Username cannot be blank";
		document.forms["register-form"]["username"].style.border ="2px solid red";
		return false;
    
    }
	
	if(x_len < 4 || x_len >20)
	{
		alert("Name must be between 5 and 20 characters!")
		return false;
	}
	return true;
}

function username_in(){
	var x = document.forms["register-form"]["username"].value;
	if(x == "")
	{
		document.forms["register-form"]["username"].style.backgroundColor ="#01EDFE";
		document.forms["register-form"]["username"].placeholder = "Username";
		document.forms["register-form"]["username"].style.border ="none";
	}
	
}
function username_student_out(){
	var x = document.forms["student-form"]["username"].value;
	var x_len=x.length;
	var regex=/^@\,.[]+$/;
    if (x.match(regex))
	{
		document.forms["student-form"]["username"].style.border ="2px solid red";
		document.forms["student-form"]["username"].value ="";
		document.forms["student-form"]["username"].placeholder = "please enter a valid username";
		return false;
	}
	if (x == "") {
        document.forms["student-form"]["username"].placeholder = "Username cannot be blank";
		document.forms["student-form"]["username"].style.border ="2px solid red";
		return false;
    
    }
	
	if(x_len < 4 || x_len >20)
	{
		alert("Name must be between 5 and 20 characters!")
		return false;
	}
}

function username_student_in(){
	var x = document.forms["student-form"]["username"].value;
	if(x == "")
	{
		document.forms["student-form"]["username"].style.backgroundColor ="#01EDFE";
		document.forms["student-form"]["username"].placeholder = "Username";
		document.forms["student-form"]["username"].style.border ="none";
	}
	
}
function username_admin_out(){
	var x = document.forms["admin_form"]["admin_username"].value;
	var x_len=x.length;
	var regex=/^@\,.[]+$/;
    if (x.match(regex))
	{
		document.forms["admin_form"]["admin_username"].style.border ="2px solid red";
		document.forms["admin_form"]["admin_username"].value ="";
		document.forms["admin_form"]["admin_username"].placeholder = "please enter a valid username";
		return false;
	}
	if (x == "") {
        document.forms["admin_form"]["admin_username"].placeholder = "Username cannot be blank";
		document.forms["admin_form"]["admin_username"].style.border ="2px solid red";
		return false;
    
    }
	
	if(x_len < 4 || x_len >20)
	{
		alert("Name must be between 5 and 20 characters!")
		return false;
	}
}

function username_admin_in(){
	var x = document.forms["admin_form"]["admin_username"].value;
	if(x == "")
	{
		document.forms["admin_form"]["admin_username"].style.backgroundColor ="#01EDFE";
		document.forms["admin_form"]["admin_username"].placeholder = "Username";
		document.forms["admin_form"]["admin_username"].style.border ="none";
	}
	
}
function email_in(){
	var x = document.forms["register-form"]["email"].value;
	if(x == "")
	{
		document.forms["register-form"]["email"].style.backgroundColor ="#01EDFE";
		document.forms["register-form"]["email"].placeholder = "Email address";
		document.forms["register-form"]["email"].style.border ="none";
	}
}

function email_out(){
	var x = document.forms["register-form"]["email"].value;
	if(x=="")
	{
		document.forms["register-form"]["email"].placeholder = "Email can't be empty";
		document.forms["register-form"]["email"].style.border ="2px solid red";
		return false;
	}
	var x = document.forms["register-form"]["email"].value;
	var regex = new RegExp('[A-Za-z0-9_+\.~!#%&]+@[A-Za-z0-9_+\.~!#%&]+\.[A-Za-z0-9_+\.~!#%&]+');
	if (!x.match(regex))
	{
		alert("Invalid Email id");
		return false;
	}
	return true;
}




function pass_in(){
	var x = document.forms["register-form"]["pass"].value;
	if(x == "")
	{
		document.forms["register-form"]["pass"].style.backgroundColor ="#01EDFE";
		document.forms["register-form"]["pass"].placeholder = "Password";
		document.forms["register-form"]["pass"].style.border ="none";
	}
}

function pass_out(){
	var x = document.forms["register-form"]["pass"].value;
	var x_len=x.length;
	if (x == "") {
        document.forms["register-form"]["pass"].placeholder = "Password is required";
		document.forms["register-form"]["pass"].style.border ="2px solid red";
		return false;
    
    }
	if(x_len < 8 || x_len >20)
	{
		alert("Please enter the password in range of 8-20 characters");
		return false;
		
	}
	return true;
}




function pass_admin_in(){
	var x = document.forms["admin_form"]["admin_password"].value;
	if(x == "")
	{
		document.forms["admin_form"]["admin_password"].style.backgroundColor ="#01EDFE";
		document.forms["admin_form"]["admin_password"].placeholder = "Password";
		document.forms["admin_form"]["admin_password"].style.border ="none";
	}
}

function pass_admin_out(){
	var x = document.forms["admin_form"]["admin_password"].value;
	var x_len=x.length;
	if (x == "") {
        document.forms["admin_form"]["admin_password"].placeholder = "Password is required";
		document.forms["admin_form"]["admin_password"].style.border ="2px solid red";
		return false;
    
    }
	if(x_len >20) //for time being
	{
		alert("Please enter the password in range of 8-20 characters");
		return false;
		
	}
}



function repass_in(){
	var x = document.forms["register-form"]["cnfpass"].value;
	if(x == "")
	{
		document.forms["register-form"]["cnfpass"].style.backgroundColor ="#01EDFE";
		document.forms["register-form"]["cnfpass"].placeholder = "Confirm password";
		document.forms["register-form"]["cnfpass"].style.border ="none";
	}
}

function repass_out(){
	var x = document.forms["register-form"]["cnfpass"].value;
	var y = document.forms["register-form"]["cnfpass"].value;
	if (x == "") {
        document.forms["register-form"]["cnfpass"].placeholder = "Please re-enter password";
		document.forms["register-form"]["cnfpass"].style.border ="2px solid red";
		return false;
    
    }
	if(x!=y)
	{
		alert("passwords do not match!!");
		return false;
	}
	return true;
}





function pass_student_in(){
	var x = document.forms["student-form"]["password"].value;
	if(x == "")
	{
		document.forms["student-form"]["password"].style.backgroundColor ="#01EDFE";
		document.forms["student-form"]["password"].placeholder = "Password";
		document.forms["student-form"]["password"].style.border ="none";
	}
}

function pass_student_out(){
	var x = document.forms["student-form"]["password"].value;
	var x_len=x.length;
	if (x == "") {
        document.forms["student-form"]["password"].placeholder = "Password is required";
		document.forms["student-form"]["password"].style.border ="2px solid red";
		return false;
    
    }
	if(x_len >20) //for time being
	{
		alert("Please enter the password in range of 8-20 characters");
		return false;
		
	}
}
function isvalidreg()
{
	qwerty=name_out() && email_out() && username_out() && pass_out() && repass_out();
	console.log(qwerty);
	return qwerty;
}



















function forgot_name_out(){
	var x = document.forms["forgot-form"]["name"].value;
	var x_len=x.length;
	var regex=/^[0-9]+$/;
    if (x.match(regex))
	{
		document.forms["forgot-form"]["name"].style.border ="2px solid red";
		document.forms["forgot-form"]["name"].value ="";
		document.forms["forgot-form"]["name"].placeholder = "please enter a valid name";
		return false;
	}
	if (x == "") {
        document.forms["forgot-form"]["name"].placeholder = "Full name cannot be blank";
		document.forms["forgot-form"]["name"].style.border ="2px solid red";
		return false;
    
    }
	
	if(x_len < 4 || x_len >20)
	{
		alert("Name must be between 5 and 20 characters!")
		return false;
	}
	return true;
}

function forgot_name_in(){
	var x = document.forms["forgot-form"]["name"].value;
	if(x == "")
	{
		document.forms["forgot-form"]["name"].style.backgroundColor ="#01EDFE";
		document.forms["forgot-form"]["name"].placeholder = "Full name";
		document.forms["forgot-form"]["name"].style.border ="none";
	}
	
}
function forgot_username_out(){
	var x = document.forms["forgot-form"]["username"].value;
	var x_len=x.length;
	var regex=/^@\,.[]+$/;
    if (x.match(regex))
	{
		document.forms["forgot-form"]["username"].style.border ="2px solid red";
		document.forms["forgot-form"]["username"].value ="";
		document.forms["forgot-form"]["username"].placeholder = "please enter a valid username";
		return false;
	}
	if (x == "") {
        document.forms["forgot-form"]["username"].placeholder = "Username cannot be blank";
		document.forms["forgot-form"]["username"].style.border ="2px solid red";
		return false;
    
    }
	
	if(x_len < 4 || x_len >20)
	{
		alert("Name must be between 5 and 20 characters!")
		return false;
	}
	return true;
}

function forgot_username_in(){
	var x = document.forms["forgot-form"]["username"].value;
	if(x == "")
	{
		document.forms["forgot-form"]["username"].style.backgroundColor ="#01EDFE";
		document.forms["forgot-form"]["username"].placeholder = "Username";
		document.forms["forgot-form"]["username"].style.border ="none";
	}
	
}



function forgot_email_in(){
	var x = document.forms["forgot-form"]["email"].value;
	if(x == "")
	{
		document.forms["forgot-form"]["email"].style.backgroundColor ="#01EDFE";
		document.forms["forgot-form"]["email"].placeholder = "Email address";
		document.forms["forgot-form"]["email"].style.border ="none";
	}
}

function forgot_email_out(){
	var x = document.forms["forgot-form"]["email"].value;
	if(x=="")
	{
		document.forms["forgot-form"]["email"].placeholder = "Email can't be empty";
		document.forms["forgot-form"]["email"].style.border ="2px solid red";
		return false;
	}
	var x = document.forms["forgot-form"]["email"].value;
	var regex = new RegExp('[A-Za-z0-9_+\.~!#%&]+@[A-Za-z0-9_+\.~!#%&]+\.[A-Za-z0-9_+\.~!#%&]+');
	if (!x.match(regex))
	{
		alert("Invalid Email id");
		return false;
	}
	return true;
}


function forgot_dob_out(){
	var x = document.forms["form_full"]["dob"].value;
	if(x=="")
	{
		alert("Please enter a date")
	}
	return false;
}


function isvalidfor()
{
	var op=forgot_name_out() && forgot_email_out() && forgot_username_out() && forgot_dob_out();
	return op;
}






function frpass_in(){
	var x = document.forms["reset-form"]["pass"].value;
	if(x == "")
	{
		document.forms["reset-form"]["pass"].style.backgroundColor ="#01EDFE";
		document.forms["reset-form"]["pass"].placeholder = "Password";
		document.forms["reset-form"]["pass"].style.border ="none";
	}
}

function frpass_out(){
	var x = document.forms["reset-form"]["pass"].value;
	var x_len=x.length;
	if (x == "") {
        document.forms["reset-form"]["pass"].placeholder = "Password is required";
		document.forms["reset-form"]["pass"].style.border ="2px solid red";
		return false;
    
    }
	if(x_len < 8 || x_len >20)
	{
		alert("Please enter the password in range of 8-20 characters");
		return false;
		
	}
	return true;
}


function frrepass_in(){
	var x = document.forms["reset-form"]["cnfpass"].value;
	if(x == "")
	{
		document.forms["reset-form"]["cnfpass"].style.backgroundColor ="#01EDFE";
		document.forms["reset-form"]["cnfpass"].placeholder = "Confirm password";
		document.forms["reset-form"]["cnfpass"].style.border ="none";
	}
}

function frrepass_out(){
	var x = document.forms["reset-form"]["cnfpass"].value;
	var y = document.forms["reset-form"]["cnfpass"].value;
	if (x == "") {
        document.forms["reset-form"]["cnfpass"].placeholder = "Please re-enter password";
		document.forms["reset-form"]["cnfpass"].style.border ="2px solid red";
		return false;
    
    }
	if(x!=y)
	{
		alert("passwords do not match!!");
		return false;
	}
	return true;
}

function isvalidforgotpass()
{
	var typq=frpass_out() && frrepass_out();
	return typq;
}
