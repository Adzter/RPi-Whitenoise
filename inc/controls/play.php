<?php

include('../../settings.php');
include('../message.php');

// Check that we're outputting on ( hdmi or audiojack )
// as far as i'm aware these are the only native audio types
// the Raspberry Pi can handle, I guess there's USB?

// After researching it seems like USB isn't a supported audio
// type of omxplayer, if you're a developer and want to try add
// USB through a different media player go for it!

// Check what song we're going to play and put the website directory
// variable (from settings.php) infront of it so the path is correct

// I'm not posting a success message because it waits for the process
// to end before sending the success message which means it'll only
// say 'successfully played' once the song has finished, doesn't really
// work too well, perhaps I can launch it as a background process 
// or something.

if (isset( $_POST['audioType']) && isset( $_POST['song'])) {
	$ssh->exec( "omxplayer -o " . $_POST['audioType'] . " " . $websiteDir . $_POST['song'] );
} else {
	$fail = new Message();
	echo $fail->printMessage('Either audio output type or song wasn\'t selected', 'warning');
}

?>