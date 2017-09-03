
<?php
session_start();
include("connection.php");
//include_once("class.Connection.php");
//include_once("class.Getset.php");

//$setvar = new getSet();


//$fname=$_POST["fname"];
//$setvar->setFname($fname);

//$lname=$_POST["lname"];
//$setvar->setLname($lname);

//$email_id =$_POST["email_id"];
//$setvar->setEmail($email);


$email_id=$_POST['email_id'];
//$setvar->setUname($uname);

$pass=$_POST['pass'];
//$setvar->setPass($pass);

//$dob=$_POST["dob"];
//$setvar->setDob($dob);

//$connect = new connection();
//$connect->makeConnection();
//$connect->insertData($setvar);
//to prevent mysql injection
		$email_id=test_input($email_id);
		$pass=test_input($pass);
		$email_id= mysql_real_escape_string($email_id);
		$pass=mysql_real_escape_string($pass);
		function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
		}


//echo "\n"."inserted";
mysql_connect("localhost","root","");
		mysql_select_db("turyst");


		//query database for user
		/*$result=mysql_query("select * from turystab where fname='$fname' and lname='$lname' and email_id='$email_id' and uname='$uname' and pass='$pass' and dob='$dob' ")
				or die("failed to query database ".mysql_error());*/
		$result=mysql_query("select * from turystab where email_id='$email_id' and pass='$pass' ");
				//or die("failed to query database ".mysql_error());

		//$row=mysql_fetch_array($result);
		$numRows = mysql_num_rows($result);
		//if ($row['email_id']==$email_id && $row['pass']==$pass) {
		//	$ma=$row['name'];
		if($numRows==1) {
			
			$_SESSION['email_id']=$email_id;
			$_SESSION['pass']=$pass;
			$_SESSION['uname']=$uname;
			header("Location: home.php");
			//$_SESSION['login_status']=1;
			
		} 
		else 
		{
			
 				header('Location: index.php');
		}


/*include_once("class.Connection.php");
include_once("class.Getset.php");

$setvar = new getSet();

//$uname="rajat";
//$pass="qwerty";


$uname=$_POST["form-username"];
$setvar->setUname($uname);

$pass=$_POST["form-password"];
$setvar->setPass($pass);


$connect = new connection();
$connect->makeConnection();
$connect->checkAuth($setvar);

echo "\n"."inserted";*/

?>





