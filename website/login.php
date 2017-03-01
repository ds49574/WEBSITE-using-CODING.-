<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="p28.css">
</head>
<body>
<button class="button1" "pic"><img src=C:\xampp\xampp\htdocs\myproject28\p11.gif height=20 width=30></button>
<button class="button"><a href="http://www.w3schools.com/html"  target="_blank">HTML</a></button>
<button class="button"><a href="http://www.w3schools.com/css"  target="_blank">CSS</a></button>
<button class="button"><a href="http://www.w3schools.com/js"  target="_blank">JAVASCRIPT</a></button>
<button class="button"><a href="http://www.w3schools.com/sql"  target="_blank">SQL</a></button>
<button class="button"><a href="http://www.w3schools.com/php"  target="_blank">PHP</a></button>
<button class="button"><a href="http://www.w3schools.com/bootstrap/default.asp"  target="_blank">BOOTSCRAP</a></button> 
<section class="container">
    <div class="login">
      <h1>Login to Quiz</h1>
      <form method="post" action="check.php">
        <p>User-Name:<input type="text" name="Username" value="" placeholder="Username or Email"></p>
        <p>Password  :   <input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Continue
          </label>
        </p>
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p><h3>If you are new user</h3><a href="http://localhost/myproject28/my.php"><h1>Sign-in</h1></a></p>
    </div>
  </section>
</body>
</html>
