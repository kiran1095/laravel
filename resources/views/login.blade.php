<html>
  <head>
    <title>forms</title>
<style>
body{
    background-image:linear_gradient(pink,violet);
}
div {
  background-color:#B0E0E6;
  width: 400px;
  height:300px;
  border: 400px;
  padding: 50px;
  margin: 20px;
}
strong {color:red;}
</style>
<script>
    
    </script>
</head>
   <body>
   
<center>
<div style="margin-top:10%;">

     <h1>LOGIN</h1> <hr>
      <form  action="/login_controller"  method = "post">

	<table>
	<tr>
    <strong>{{$result}}</strong>
          @csrf
         <tr><td>Email-ID:</td><td><input type="text" name="email"/></td></tr>
          @error('email')
          <p>{{$message}}</p>
          @enderror
           <tr><td>Password:</td><td><input type="password" name="password"/></td></tr><br>
           @error('password')
          <p>{{$message}}</p>
          @enderror
          <tr><td> </td><td><input type="submit" name="submit" value="Submit"/></td> 
         </tr>
	</tr>
  </table>


     
    </form>
 	<a href="./query.php">Forgot Password</a>&emsp;&emsp;&emsp;&emsp;&emsp;
	  <a href="./registration.html">New User</a>&emsp;&emsp;&emsp;&emsp;&emsp;
</div>  </center>

  </body>
  </html>