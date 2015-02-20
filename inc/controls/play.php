<?php

include('../../settings.php');
include('../message.php');

if (isset( $_POST['audioType']) && isset( $_POST['song'])) {
	$ssh->exec( "omxplayer -o " . $_POST['audioType'] . " " . $websiteDir . $_POST['song'] );
} else {
	$fail = new Message();
	echo $fail->printMessage('Either audio output type or song wasn\'t selected', 'warning');
}

?>