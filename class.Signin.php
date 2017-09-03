
<?php

$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("turyst", $connection); // Selecting Database from Server
if(isset($_POST['signup']))
{ // Fetching variables of the form which travels in URL
	$fname = mysql_real_escape_string($_POST['fname']);
	$lname=mysql_real_escape_string($_POST['lname']);
	$uname=mysql_real_escape_string($_POST['uname']);
	$email_id = mysql_real_escape_string($_POST['email_id']);
	$pass=($_POST['pass']);
	//$confirmpass=($_POST['conf']);
	//$gende = $_POST['gende'];
	$dob=$_POST['dob'];
	if($fname !=''|| $email_id !='')
	{
				//Insert Query of SQL
		//header('index.php);
		$query = mysql_query("insert into turystab(fname,lname,email_id,uname,pass,dob) values ('$fname', '$lname', '$email_id', '$uname', '$pass','$dob')");
		header('Location:index.php');
	}
	else
	{
			echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
	}		
}


mysql_close($connection); // Closing Connection with Server


/*session_start();
//include_once("class.Connection.php");
//include_once("class.Getset.php");

//$setvar = new getSet();


$fname=$_POST["form-first-name"];
//$setvar->setFname($fname);

$lname=$_POST["form-last-name"];
//$setvar->setLname($lname);

$email_id =$_POST["form-email"];
//$setvar->setEmail($email);


$uname=$_POST["form-username"];
//$setvar->setUname($uname);

$pass=$_POST["form-password"];
//$setvar->setPass($pass);

$dob=$_POST["date"];
//$setvar->setDob($dob);

//$connect = new connection();
//$connect->makeConnection();
//$connect->insertData($setvar);


//echo "\n"."inserted";
mysql_connect("localhost","root","");
		mysql_select_db("turyst");


		//query database for user
		$result=mysql_query("select * from turystab where fname='$fname' and lname='$lname' and email_id='$email' and uname='$uname' and pass='$pass' and dob='$dob' ")
				or die("failed to query database ".mysql_error());

		$row=mysql_fetch_array($result);
		
		if ($row['uname']==$uname && $row['pass']==$pass) {
		//	$ma=$row['name'];
			$_SESSION['fname']=$fname;
			$_SESSION['pass']=$pass;
			//$_SESSION['first']=$row['fname'];
			header("Location: classLogin.php");
			//$_SESSION['login_status']=1;
			
		} else {
			
 				header('Location: index.html');
		}*/

?>
