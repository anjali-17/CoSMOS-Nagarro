

<?php
session_start();
if(isset($_SESSION['email_id']) && isset($_SESSION['pass']))
{

	/*echo '<form action="" method="post">
<label>Enter your current password</label>
<input type="password" name="p1"><br>
<label>Enter your new password</label>
<input type="password" name="p2"><br>
<label>Enter your new password again</label>
<input type="password" name="p3"><br>
<input type="submit" name="">
</form>';*/

$password=$_POST['oldpass'];
if($password==$_SESSION['pass'])
{
	$con=mysqli_connect ("localhost","root","","turyst");

	$password1 = $_POST['newpass'];
	$password2 = $_POST['confirmpass'];
	$email_id=$_SESSION['email_id'];
	$password1 = mysql_real_escape_string($password1);
	$password2 = mysql_real_escape_string($password2);
	//echo $password1;
	//echo "$username";
	//$sql="UPDATE vcontab SET password='$password1' WHERE username='$username' )";
	//$result=mysqli_query($con,$sql);
	if ($password1!=$password2)
	{
	    echo "your passwords do not match";
	}
	else if (mysqli_query($con, "UPDATE turystab SET pass='$password1' WHERE email_id='$email_id'"))
	{
	    echo "You have successfully changed your password.";
	}
}
else
	 echo "your current passwords do not match";
}
?>