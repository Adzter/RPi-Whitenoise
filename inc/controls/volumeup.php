<?php

include('../../settings.php');
include('../message.php');

$ssh->exec( $websiteDir . "/inc/volume.sh up" );

?>