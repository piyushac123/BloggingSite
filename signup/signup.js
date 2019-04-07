function func1()								 
{ 	
    var fname = document.forms["RegForm"]["fname"]; 
    var lname = document.forms["RegForm"]["lname"]; 
	var email = document.forms["RegForm"]["email"];
    var channel = document.forms["RegForm"]["channel"];
	var password = document.forms["RegForm"]["pass"];
    var confirm = document.forms["RegForm"]["cpass"];
    var value1="";
	var flag=0;
    if((fname.value=='')||(lname.value=='')||(email.value=='')||(channel.value=='')||(password.value=='')||(confirm.value=='')){
    if(fname.value==''){
        value1+='First Name is empty\n';
        fname.focus();
        flag=1;
    }
    if(lname.value==''){
        value1+='Last Name is empty\n';
        lname.focus();
        flag=1;
    }
    if(email.value==''){
        value1+='Email is empty\n';
        email.focus();
        flag=1;
    }
    if(channel.value==''){
        value1+='Channel Name is empty\n';
        channel.focus();
        flag=1;
    }
    if(password.value==''){
        value1+='Password is empty\n';
        password.focus();
        flag=1;
    }
    if(confirm.value==''){
        value1+='Confirm is empty\n';
        confirm.focus();
        flag=1;
    }
    }
    else{
        if(password.value!=confirm.value){
            value1+='Confirm Password failed';
            flag=1;
        }
    }
    if(flag==1){
        alert(value1);
        return false;
    }
        return true;
    
}