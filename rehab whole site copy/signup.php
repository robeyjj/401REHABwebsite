<?php
if (isset($_REQUEST['Email']))
	{
	//send email
	$email = $_REQUEST['Email'] ;
	$subject = ("Addition to Rehab distribution list: ".$email) ;
	$message = $_REQUEST['Email'] ;	
	mail("signup@401rehab.com", $subject, $message);
	header("Location: thanks");
	} 	
?>