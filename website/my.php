<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="p28.css">
  </head>
<body>
<section class="container">
    <div class="login">
      <h1>Registration For Quiz</h1>
      <form id="register" name="register" action="process.php"  method="POST">
        <label for ="Username"> Username </label><br>
<input type="text"  id="Username" name="Username"  placeholder="Enter Username"> <br><br>
<label for ="Password"> Password </label><br>
<input type="password" class="register-control" id="password" name="password" placeholder="Enter Password" ><br><br>
<label for ="Confirm-Password"> Confirm Password </label><br>
<input type="password" class="register-control" id="Confirm_Password" name="Confirm_Password" placeholder="Confirm Password" ><br><br>
<label for="email" > Email </label><br>
<input type ="email" class="register-control" id="email" name="email" placeholder="Enter Valid Email"><br><br>

<input type="checkbox" class="register-control" id="agree" name="agree">
<label for="agree" >please agree to our policy</label><br><br>
<table>
<tr>
<td>
<form>
   <input type="submit" value="Submit"/>
   <input type="reset" value="Reset">
</form>
</td>
</tr>
</table>
</form>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#register").validate({
errorElement: 'd',
rules:{
    "Username":{
    required: true,     
    minlength:5
    },
"password":{
required:true,
minlength:5
},
"Confirm_Password":{
required:true,
equalTo: "#password"
},
"email":{
required:true,  
},
"agree":{ required:true ,}
},

messages: {
    Username:{
                 required: "Please provide a username",
                minlength: "Must be atleast 5 characters"
    },
     password: {
                required: "Please provide a password",
                minlength: "Must be atleast 5 characters"
                },
     Confirm_Password: {
                required: "Please provide a confirm password",
                equalTo: "Please enter same password as above"
                },
    },
    email:{
                required: "Please provide a valid email",
    } 
	
  });  
 });
</script>
</body>
</html>