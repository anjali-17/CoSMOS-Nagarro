
<?php
session_start();
include("class.Getset.php");
include_once("class.Database.php");
/**
* 
*/
class connection

{
	STATIC $collection;

	public function makeConnection()
	{
		//connect to mongodb
		$uri = "mongodb://admin:pass@ds031257.mlab.com:31257/mydb";
		$m = new MongoClient($uri);

		//select database
		$db = $m->mydb;
		echo "\n"."database created"."\n";
		echo $db;
		self::$collection = $db->createCollection("userdata");
		echo "collection created";
	}



	public function insertData($setvar)
	{

		echo "\n"."getting data";

		$uname=$setvar->getUname();

		if ($this->getUsername($setvar)==$uname) {
			# code...
			header('Location: signup-failed.html');
		} else {
			# code...
			$fname=$setvar->getFname();
			$lname=$setvar->getLname();
			$email=$setvar->getEmail();
			$uname=$setvar->getUname();
			$pass=$setvar->getPass();
			$dob = $setvar->getdob();

			//echo self::$collection." Is my collection"."\n";
			//echo $fname;
			//echo $lname;
			//echo $email;
			//echo $pass;
			//echo $dob;

			$doc = array("firstname"=> $fname,"lastname"=> $lname,"email"=> $email,"uname"=>$uname,"password"=>$pass,"dob"=>$dob);

			self::$collection->insert($doc);
			header('Location: signup-success.html');
		}
		


	}

	public function getUsername($setvar)
	{
		$find_user=$setvar->getUname();


		$cursor = self::$collection->findOne(array('uname'=>$find_user),array("uname" => true,"_id"=>false));

		return($cursor['uname']);


	}

		public function getLoginname($setvar)
	{
		$find_user=$setvar->getUname();


		$cursor = $_SESSION["collection"]->findOne(array('uname'=>$find_user),array("uname" => true,"_id"=>false));

		return($cursor['uname']);


	}

		public function getPassword($setvar)
	{
		$find_user=$setvar->getUname();
		$find_pass=$setvar->getPass();

		$cursor = self::$collection->findOne(array('uname'=>$find_user),array("_id"=>false,"password"=>true));

		return($cursor['password']);
	}	

		public function getPasscode($setvar)
	{
		$find_user=$setvar->getUname();
		$find_pass=$setvar->getPass();

		$cursor = $_SESSION["collection"]->findOne(array('uname'=>$find_user),array("_id"=>false,"password"=>true));

		return($cursor['password']);
	}
		

		public function checkAuth($setvar)
	{	
		$pass=$setvar->getPass();
		$uname=$setvar->getUname();

		if ($pass =='potato' and $uname =='Admin') {
			# code...
			$databasename = 'mydb';
			$collname = 'userdata';
			$database = new dataBase();
			$database->getConnection($databasename,$collname);			
			header('Location: AdminDashboard/index.html');
		}
		else
		{
			# code...
			$databasename = 'mydb';
			$collname = 'userdata';
			$database = new dataBase();
			$database->getConnection($databasename,$collname);
			if ($this->getPasscode($setvar)==$pass and $this->getUsername($setvar)==$uname)
			{
				# code...
				echo "\n Login Successfull".$_SESSION["collection"]."\n";
				$_SESSION["loginname"] = $uname;

				header('Location: home.html');
			}
			else
			{
				# code...
				header('Location: index.html');
			}
		}

	}

		public function insertBook($setvar)
	{
		$add_payable=$setvar->getPayable();
		$add_coupon=$setvar->getCoupon();
		$add_slot=$setvar->getSlot();
		$add_destination=$setvar->getDestination();
		$add_seats=$setvar->getSeats();
		$add_title=$setvar->getTitle();
		$add_date=$setvar->getDate();
		$add_type=$setvar->getType();



		$databasename = 'mydb';
		$collname = 'bookings';
		$database = new dataBase();
		$database->getBookingConnnection($databasename,$collname);

		
		$doc = array("uname"=>$_SESSION["loginname"],"type"=>$add_type,"title"=> $add_title,"slot"=> $add_slot,"date"=>$add_date,"destination"=>$add_destination,"seats"=>$add_seats,"coupon"=>$add_coupon,"payable"=>$add_payable);

		$_SESSION["booking_collection"]->insert($doc);
		
		echo $add_date;


		header('Location: my_booking.php');

	}


		public function changePass($pcurrent,$pnew,$pconfirm)
	{
		$databasename = 'mydb';
		$collname = 'userdata';
		$database = new dataBase();
		$database->getConnection($databasename,$collname);

		$cursor = $_SESSION["collection"]->findOne(array('uname'=>$_SESSION["loginname"]),array("password"=>true,"_id"=>false));

		if ($pcurrent == $cursor['password'])
		{
			$doc=(array('uname' =>$_SESSION["loginname"],'password'=>$pcurrent));
			$_SESSION["collection"]->update($doc,array('$set' =>array('password' => $pconfirm)));
			echo $pcurrent;
			echo $pconfirm;
			echo "UPDATED";
			header('Location: profile-success.php');
		}
		else
		{
			echo "ILLEGAL";
			header('Location: profile-failed.php');
		}



	}


}
?>
