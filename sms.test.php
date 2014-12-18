<?php

// set your mobile number here!
$strNumber = "+16477452046";

require_once("sms.class.php");

$objSms = new sms("ttyS0");

if ($objSms->intStatus == SMS_STATUS_OK)
{
	echo "init ok\n";	
}
else
{
	echo "could not init\n";
	die();
}

if ($objSms->command('AT') === TRUE)
{
	echo "at:OK\n";
}
else
{
	echo "at:ERROR\n";
}

if ($objSms->send($strNumber, "this is a test message") === TRUE)
{
	echo "send:OK\n";
}
else
{
	echo "send:ERROR\n";	
}

?>
