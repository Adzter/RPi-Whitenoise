<?php

/*

This is your RaspberryPi's login information

You NEED to put your root login here. Anything else
won't be able to run the commands.

Having your root information in here makes your
login INSECURE, anyone that finds it can get full
access so please only use this behind a firewall
where no-one can access or don't keep sensitive 
information on your RPi. Chances are most people
don't have ports forwarded on their RPi anyway.

You have been warned.

*/

$username = 'root';
$password = 'raspberry';
$websiteDir = "/var/www/whitenoise/";

include($_SERVER["DOCUMENT_ROOT"] . '/whitenoise/lib/phpseclib/Net/SSH2.php');
set_include_path( $_SERVER["DOCUMENT_ROOT"] . '/whitenoise/lib/phpseclib/');
	
GLOBAL $ssh;
$ssh = new Net_SSH2('192.168.1.47');
if ($ssh->login( $username, $password )) {
	$login = true;
}

?>