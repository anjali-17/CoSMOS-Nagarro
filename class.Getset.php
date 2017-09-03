<?php

/**
* 
*/
class getSet 
{
	
	private $fname;
	private $lname;
	private $email;
	private $uname;
	private $pass;
	private $dob;
	private $ename;
	private $coupon;	
	private $slot;
	private $destination;
	private $title;
	private $seats;
	private $date;
	private $type;


	function __construct()
	{
		# code...
	}

//setter getter fname
	public function setFname($fname)
	{
		$this->fname = $fname;
		echo "\n".$this->fname."\n";
	}
	public function getFname()
	{
		echo "\n".$this->fname."\n";
		return $this->fname;
	}

//setter getter lname
	public function setLname($lname)
	{
		$this->lname = $lname;
	}
	public function getLname()
	{
		return $this->lname;
	}



//setter getter email
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function getEmail()
	{
		return $this->email;
	}

//setter getter uname
	public function setUname($uname)
	{
		$this->uname = $uname;
	}
	public function getUname()
	{
		return $this->uname;
	}	

//setter getter password
	public function setPass($pass)
	{
		$this->pass = $pass;
	}
	public function getPass()
	{
		return $this->pass;
	}	

//setter getter date of birth
	public function setDob($dob)
	{
		$this->dob = $dob;
	}
	public function getDob()
	{
		return $this->dob;
	}	

//setter getter event name
	public function setPayable($payable)
	{
		$this->payable = $payable;
	}
	public function getPayable()
	{
		return $this->payable;
	}

//setter getter event type
	public function setCoupon($coupon)
	{
		$this->coupon = $coupon;
	}
	public function getCoupon()
	{
		return $this->coupon;
	}

//setter getter event address
	public function setSlot($slot)
	{
		$this->slot = $slot;
	}
	public function getSlot()
	{
		return $this->slot;
	}

//setter getter event destination
	public function setDestination($destination)
	{
		$this->destination = $destination;
	}
	public function getDestination()
	{
		return $this->destination;
	}

//setter getter event seats available
	public function setSeats($seats)
	{
		$this->seats = $seats;
	}
	public function getSeats()
	{
		return $this->seats;
	}


//setter getter event title
	public function setTitle($title)
	{
		$this->title = $title;
	}
	public function getTitle()
	{
		return $this->title;
	}

//setter getter event date
	public function setDate($date)
	{
		$this->date = $date;
	}
	public function getDate()
	{
		return $this->date;
	}

//setter getter event type
	public function setType($type)
	{
		$this->type = $type;
	}
	public function getType()
	{
		return $this->type;
	}




}	


?>