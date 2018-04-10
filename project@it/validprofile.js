function dob_out(){
	var x = document.forms["form_full"]["dob"].value;
	if(x=="")
	{
		alert("Please enter a date")
	}
	return false;
}
function getage(){
	var a = document.forms["form_full"]["dob"].value;
	var today = new Date();
    var birthDate = new Date(a);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
    document.forms["form_full"]["age"].value = age;
}


function Mobile_Number_in(){
	var x = document.forms["form_full"]["mobile_number"].value;
	if(x == "")
	{
		document.forms["form_full"]["mobile_number"].style.backgroundColor ="#008B8B";
		document.forms["form_full"]["mobile_number"].placeholder = "94930XXXXX";
		document.forms["form_full"]["mobile_number"].style.border ="none";
	}
}

function Mobile_Number_out(){
	var x = document.forms["form_full"]["mobile_number"].value;
	var regex=/^[0-9]+$/;
	if (x == "") {
        document.forms["form_full"]["mobile_number"].placeholder = "can't leave this empty";
		document.forms["form_full"]["mobile_number"].style.border ="2px solid red";
		return false;
    
    }
	
	if (!x.match(regex))
	{
		document.forms["form_full"]["mobile_number"].value = "";
		document.forms["form_full"]["mobile_number"].placeholder = "enter valid number";
		document.forms["form_full"]["mobile_number"].style.border ="2px solid red"
	}
	
}

function getstudentid() {
    var dpt = document.forms["form_full"]["depart_name"].value;
    var s = document.forms["form_full"]["reg_no"].value;
    var res = s.substring(2,4);
    //alert(res);

    if(dpt=="BT")
        document.forms["form_full"]["rollno"].value = res+"/BT/";
    if(dpt=="CHE")
        document.forms["form_full"]["rollno"].value = res+"/CHE/";
    if(dpt=="CIV")
        document.forms["form_full"]["rollno"].value = res+"/CE/";
    if(dpt=="CSE")
        document.forms["form_full"]["rollno"].value = res+"/CSE/";
    if(dpt=="EE")
        document.forms["form_full"]["rollno"].value = res+"/EE/";
    if(dpt=="ECE")
        document.forms["form_full"]["rollno"].value = res+"/ECE/";
    if(dpt=="IT")
        document.forms["form_full"]["rollno"].value = res+"/IT/";
    if(dpt=="ME")
        document.forms["form_full"]["rollno"].value = res+"/ME/";
    if(dpt=="MME")
        document.forms["form_full"]["rollno"].value = res+"/MME/";

}