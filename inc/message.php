<?php

/**
Created by Adam Wilson
http://www.adam-wilson.me/


This class just makes it easier
to call bootstrap alerts. It uses
the dismissible alerts and you can set the
types as one of the following:

- success
- info
- warning
- danger

of which you can preview here:
http://getbootstrap.com/components/

Putting anything else will just result in it
failing unless you've got custom CSS in place

**/

class Message {
	
	//These are our default messages in case they aren't
	//going to be set. A simple alert with 'command' has
	//been sent is general enough to cover most cases
	private $message = "Command has been sent to the RPi";
	private $type = "info";
	
	public function printMessage( $message, $type ) {
		$this->message = $message;
		$this->type = $type;
		
		return "
			<div class=\"alert alert-$this->type alert-dismissible\" role=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				$this->message
			</div>
		";
	}
}

?>