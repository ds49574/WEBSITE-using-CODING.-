<?php include 'database.php'?>
<?php
$name=$_POST['Username'];
$rollno=$_POST['password'];
$email=$_POST['email'];
mysqli_query($connect,"INSERT INTO registration(Username,Password,email)
 VALUES('$name','$rollno','$email')");
if(mysqli_affected_rows($connect) > 0)
{
 echo "<p>Registration Successful</p>";
} else {
 echo "Registration not Successful<br />";
 echo mysqli_error ($connect);
}
echo "<br><a href=http://localhost/myproject28/my.php>Do you want to do more Registration?</a><br>";
echo "<a href=http://localhost/myproject28/login.php>Home</a>";
?>