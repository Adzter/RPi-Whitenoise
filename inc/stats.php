<?php

include('../settings.php');
include('message.php');

$bash = "/bin/sh -c 'if ps aux | grep \"[o]mxplayer\" > /dev/null; then echo \"Playing: \"; else echo \"Nothing currently playing\"; fi'";

$output = new Message();
echo $output->printMessage( $ssh->exec( $bash ), "info" );
?>