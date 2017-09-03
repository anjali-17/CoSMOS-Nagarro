<?php
/**
* 
*/
session_start();	
class dataBase
{


	public function getConnection($databasename,$collname)
	{
		$uri = "mongodb://admin:pass@ds031257.mlab.com:31257/mydb";
		$m = new MongoClient($uri);

		//select database
		$db = $m->$databasename;

		$_SESSION["collection"] = $db->createCollection($collname);


	}

		public function getBookingConnnection($databasename,$collname)
	{
		$uri = "mongodb://admin:pass@ds031257.mlab.com:31257/mydb";
		$m = new MongoClient($uri);

		//select database
		$db = $m->$databasename;

		$_SESSION["booking_collection"] = $db->createCollection($collname);


	}


#session_start();
#include_once("class.Database.php");
#$database = new dataBase();
#$database->getConnection();
#echo "\nin class Signin".$_SESSION["collection"]."\n";
}

?>