/*function func(){
    window.location.replace("../blog1/blog1.xml");
}*/
function func1()								 
{ 		 
	var email = document.forms["RegForm"]["Email"]; 
	var password = document.forms["RegForm"]["Password"];
	var value1=""; 
	var flag=0;
		if (email.value == "")								 
		{ 
			value1+="Please enter a valid e-mail address.\n"; 
			email.focus(); 
			flag=1;
		} 

		else if (email.value.indexOf("@", 0) < 0)				 
		{ 
			value1+="Please enter a valid e-mail address."; 
			email.focus(); 
			flag=1;
		} 

		else if (email.value.indexOf(".", 0) < 0)				 
		{ 
			value1+="Please enter a valid e-mail address.\n"; 
			email.focus(); 
			flag=1;
		} 

		if (password.value == "")					 
		{ 
			value1+="Please enter your password\n"; 
			password.focus(); 
			flag=1; 
		} 
        
    if(email.value==''||password.value==''){
		alert(value1);
    }
	
}
/*function validateForm() 
{
	var x = document.getElementById("myform").elements.namedItem("fname").value;
var x1 = document.getElementById("lname").value;
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var x2 = document.getElementById("pass").value;
var x3 = document.getElementById("cpass").value;
var nam= /^[A-Za-z]{1,10}$/;
if (x==null || x=="")
{
  alert("First Name must be filled");
 return false;
} 
else if(nam.test(x)==false)
{
alert("First Name must be alphabets only");
 return false;
}
else if (x1 == ""||x1==null) 
{
       // alert("Last Name must be filled out");
       alert("Last Name must be filled out");
	return false;

 }
 else if(nam.test(x1)==false)
{
alert("Last Name must be alphabets only");
 return false;
}
//EMAIL ADDRESS VALIDATION
else if (reg.test(email.value) == false) 
        {
           alert('Invalid Email Address. Email must contain @ and .');
            return false;
        }
//PASSWORD VALIDATION
 else if(x2.length < 6)
{
        alert("Error: Password must contain at least six characters!");
        return false;
}
   else if(x3.value == null || x2.value != x3.value) 
{
	alert("Error: password must match!");
        return false;
}
else
{
	return true;
}

}
*/
