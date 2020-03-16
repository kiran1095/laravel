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
<script>
function validate(){
    first_name_validate();
    last_name_validate();
    email_validate();
    password_validate();
    confirm_password_validate();
    age_validate();
    phone_validate();
}
function first_name_validate()
    {
        
      var first_name_var=document.getElementById("first_name");
      document.getElementById("first_name_format_span").style.display="none";
      /*if(first_name_var.value=="")
      {
        document.getElementById("first_name_value").style.display="block";
        //document.getElementById("middle_name").style.backgroundColor="Red";
        return false;
      }*/
      if(!first_name_var.value.match(/^[a-zA-Z]+$/)||first_name_var.value=="")
      {
        document.getElementById("first_name_format_span").style.display="block";
        return false;
      }
      else
      {
        return true;
      }
      
    }

    function last_name_validate()
    {
       
      var last_name_var=document.getElementById("last_name");
      document.getElementById("last_name_format_span").style.display="none";
      if(!last_name_var.value.match(/^[a-zA-Z]+$/)||last_name_var.value=="")
      {
        document.getElementById("last_name_format_span").style.display="block";
        return false;
      }
      else
      {
        return true;
      }

    }

    function email_validate()
    {
      var email_var=document.getElementById("email");
      document.getElementById("email_format_span").style.display="none";
    if(!email_var.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)||email_var.value=="")
      {
        document.getElementById("email_format_span").style.display="block";
        return false;
      }
      else
      {
        return true;
      }
    }

    function password_validate()
    {
      var password_var=document.getElementById("password");
      document.getElementById("password_format_span").style.display="none";
    if(!password_var.value.match(/^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$/)||password_var.value=="")
      {
        document.getElementById("password_format_span").style.display="block";
        return false;
      }
      else
      {
        return true;
      }
    }
    function confirm_password_validate(){
        var password_var=document.getElementById("password");
        var confirm_password_var=document.getElementById("confirm_password");
        document.getElementById("confirm_password_format_span").style.display="none";
        if(!confirm_password_var.value.match(/^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$/)||confirm_password_var.value=="")
            {
                document.getElementById("confirm_password_format_span").style.display="block";
                return false;
            }
        else
            {
                if(password_var.value==confirm_password_var.value){
                return true;
                }
                else{
                    document.getElementById("validate_span").style.display="block";
                    return false; }
                
            }  
    }

    function age_validate(){
        var age_var=document.getElementById("age");
        document.getElementById("age_format_span").style.display="none";
        if(!age_var.value.match(/^[0-9]/)||age_var.value=="")
            {
                document.getElementById("age_format_span").style.display="block";
                return false;
            }
        else
            {
                return true;
            }  
    }

    function phone_validate(){
        var phone_var=document.getElementById("phone");
        document.getElementById("phone_format_span").style.display="none";
        if(!phone_var.value.match(/^[0-9]{10}/)||phone_var.value=="")
            {
                document.getElementById("phone_format_span").style.display="block";
                return false;
            }
        else
            {
                return true;
            }  
    }   

</script>

<body>
   
<div class="signup-form">
    <form  name="register" action="/registration"  id="form1" method="post">
        @csrf
		<h2>Register</h2>
    <strong>{{$result?? ''}}</strong>
        <div class="form-group">
			<div class="row">
                <div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" id="first_name" onfocusout="first_name_validate()" ></div>
                <span style="color:red;display:none" id="first_name_format_span">&nbsp&nbsp * First name must contain only alphabets</span>
                @error('first_name')
                    <p>{{$message}}</p>
                @enderror
                <div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" id="last_name" onfocusout="last_name_validate()" ></div>
                <span style="color:red;display:none" id="last_name_format_span">&nbsp&nbsp * Last name must contain only alphabets</span>
                @error('last_name')
                    <p>{{$message}}</p>
                @enderror            
            </div>        	
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" id="email" onfocusout="email_validate()">
                <span style="color:red;display:none" id="email_format_span">&nbsp&nbsp * Email must contain only alphabets</span>
            @error('email')
                <p>{{$message}}</p>
            @enderror
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" id="password" onfocusout="password_validate()">
            <span style="color:red;display:none" id="password_format_span">&nbsp&nbsp * Password must atleast contain one alphabet and one number in it</span>
            @error('password')
                    <p>{{$message}}</p>
            @enderror
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" id="confirm_password" onfocusout="confirm_password_validate()">
            <span style="color:red;display:none" id="confirm_password_format_span">&nbsp&nbsp * Confirm Password must atleast contain one alphabet and one number in it</span>
            <span style="color:red;display:none" id="validate_span">&nbsp&nbsp * Entered Password and confirm password didnot match</span>
            @error('password')
                    <p>{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="age" placeholder="Enter Age" id="age" onfocusout="age_validate()">
            <span style="color:red;display:none" id="age_format_span">&nbsp&nbsp * Age must contain only Numbers</span>
            @error('age')
                    <p>{{$message}}</p>
            @enderror
        </div> 
        <div class="form-group">
            <input type="phone" class="form-control" name="phone" placeholder="Enter Your Phone Number" id="phone" onfocusout="phone_validate()">
            <span style="color:red;display:none" id="phone_format_span">&nbsp&nbsp * Phone must contain 10 digits</span>
            @error('phone')
                    <p>{{$message}}</p>
            @enderror
        </div>  
        <div class="form-group">
            <label for="gender">gender</label>
            <select class="form-control" id="gender" name="gender">
              <option>Male</option>
              <option>Female</option>
            </select>
            @error('gender')
                    <p>{{$message}}</p>
            @enderror
            </div>
		<div class="form-group">
            <button class="btn btn-success btn-lg btn-block" name="submit" id="submit" onclick="return validate()">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="/login">Sign in</a></div>
</div>
</body>
</html>                            