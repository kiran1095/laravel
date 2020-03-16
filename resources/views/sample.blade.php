<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #fff;
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: black;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<body>
<script>
    function middle_name_validate()
    {
      var middle_name_var=document.getElementById("middle_name");
      document.getElementById("middle_name_format_span").style.display="none";
      middle_name_var.classList.remove("is-valid");
      middle_name_var.classList.remove("is-invalid");
      if(middle_name_var.value=="")
      {
        document.getElementById("middle_name").style.backgroundColor="Red";
        //return false;
      }
      else if(!middle_name_var.value.match(/^[a-zA-Z]+$/))
      {
        document.getElementById("middle_name_format_span").style.display="block";
        return false;
      }
      else
      {
        middle_name_var.classList.add("is-valid");
      }
    }
/*
/* 
function validate()								 
    { 
        
        var first_name = document.forms["register"]["first_name"];
        var last_name=document.forms["register"]["last_name"];			 
        var email = document.forms["register"]["email"]; 
        var password = document.forms["register"]["password"];
        var confirm_password = document.forms["register"]["confirm_password"];
        var phone = document.forms["register"]["phone"]; 
        var age = document.forms["register"]["age"];
        var gender=document.forms["register"]["gender"]; 
         var input=document.getElementById("userans");
function first_name(){
    if (first_name.value == "" )								 
    { 
        window.alert("Please enter your first name.");  
        name.focus(); 
        return false; 
    }
    else if(!first_name_var.value.match(/^[a-zA-Z]+$/))
      {
        document.getElementById("first_name_format_span").style.display="block";
        return false;
      }
    else{
        return true;
    }
    }
if(last_name.value == "")
{
window.alert("Please enter Last name");
name.focus();
return false;
} 
var mail=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if (email.value == "")								 
{ 
window.alert("Please enter a e-mail address."); 
email.focus(); 
return false; 
} 
if(!email.value.match(mail))
{
window.alert("Please enter a valid e-mail address."); 
email.focus(); 
return false;
}
if (password.value == "")					 
{ 
window.alert("Please enter your password"); 
password.focus(); 
return false; 
} 
if (password.value != confirm_password.value)					 
{ 
window.alert("Password and Confirm Password didnot match"); 
password.focus(); 
return false; 
} 

if (phone.value == "")							 
{ 
window.alert("Please enter your Phone number"); 
phone.focus(); 
return false; 
} 
if (age.value == "")						 
{ 
window.alert("Please enter your age"); 
age.focus(); 
return false; 
} 
if (gender.selectedIndex < 0)				 
{ 
alert("Please enter your gender"); 
gender.focus(); 
return false;
} 

document.getElementById("form1").submit();

return true; 
}
*/

*/
</script>
<form>
<div class="form-group col-md-4">
                    <label for="name" id="name_label">Middle name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter middle name" value="{{ Request::path() == 'student_profile' ? $student_details->middle_name : old('middle_name') }}" onfocusout="middle_name_validate()"/>
                    <span style="color:red;display:none" id="middle_name_format_span">&nbsp&nbsp * Middle name must contain only alphabets</span>
                    @error("middle_name")
                    <span style="color:red">* {{$message}}</span>
                    @enderror
                </div>
</form>
</body>
</html>




