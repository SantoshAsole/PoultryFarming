<?php

/**********************************************************************
	*	Author: Santosh Asole
	*  Freelance: Available 
	*	Email: santoshasole9@gmail.com
	* 	Don't change the code
	* 	Don,t remove this comment
	
 
 **********************************************************************/
include_once('connection.php');



if (isset($_POST['contact'])) {

	extract ($_POST);
	
	$contact=$db->query("INSERT INTO `contactus_tbl` (`ct_fname`,`ct_lname`,`ct_email`,`ct_mobile`,`ct_comment`) VALUES ('$ct_fname','$ct_lname','$ct_email','$ct_mobile','$ct_comment')");
	// $db->debug();
	if ($contact) {
		
		header("Location: index.php");
	}
	else{
		header("Location: Contact.php");
		
	}
}

if (isset($_POST['nl_subscribe'])) {

	extract ($_POST);
	
	$subscribe=$db->query("INSERT INTO `subscribe_tbl` (`nl_fname`,`nl_lname`,`nl_email`) VALUES ('$nl_fname','$nl_lname','$nl_email')");
	// $db->debug();
	if ($subscribe) {

		// mail code start here

		 $to = $nl_email;
         $subject = "This is subject";
         
         $message = "<b>Welcome To Poultry Farming, Aurangabad.</b>";
         $message .= "<h1>Your Subscription Done.</h1>";
         
         $header = "From:poultryfarming@gmail.com \r\n";
         $header .= "Cc:poultryfarming2@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            header("Location: index.php");
         }else {
            header("Location: index.php");
         }

         // mail code end here
		
		header("Location: index.php");
	}
	else{
		header("Location: index.php");
		
	}
}



if (isset($_POST['submit'])) {

	extract ($_POST);
	
	$reg=$db->query("INSERT INTO `register` (`name`,`email`,`mob`,`pas`,`type`) VALUES ('$name','$email','$mob','$pas','$type')");
	// $db->debug();
	if ($reg) {
		
		header("Location: login.php");
	}
	else{
		header("Location: reg.php");
		
	}
}






if (isset($_POST['login'])) {

	extract ($_POST);

	// $as=$uname;
	$sel = $db->get_row("SELECT * FROM `register` where email='$uname' and pas=$pass");
	// $db->debug();
	$typ=$sel->type;

	if($typ==1)
	{
		header("Location: welcome.php");
	}
	elseif($typ==2)
	{
		header("Location: super.php");
	}
	else
	{
		header("Location: login.php");
	}
	
	
}
?>