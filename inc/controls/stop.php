<?php

include('../../settings.php');
include('../message.php');

$ssh->exec( "pkill omxplayer" );
$success = new Message();
echo $success->printMessage( 'RPi stopped playing', 'success');

?>