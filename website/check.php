<?php include 'database.php' ?>
<?php
$name=$_POST['Username'];
$password=$_POST['password'];
$op=mysqli_query($connect,"SELECT password FROM registration WHERE Username='$name'");
$row=mysqli_fetch_assoc($op);
if($password!=$row['password']||$name==""||$password=="")
{
	echo "invalid Roll no and password combination<br>please try again later<br>";
	echo "<a href='http://localhost/myproject28/login.php'>go back</a>";
}
else
{
echo "<h1>Welcome $name</h1>";
echo "<a href='http://localhost/myproject28/quizapp.html'><h1>START QUIZ</h1></a>";
echo "<a href='http://localhost/myproject28/login.php'><h3>LOGOUT</h3></a>";
}
?>
