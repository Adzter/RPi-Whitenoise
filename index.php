<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.ico">
    <title>RPi White Noise</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<?php 
		//Include the settings file
		include( 'settings.php' );
		//Include the message class
		include( 'inc/message.php' );
	?>
	<form id="audioTypeForm">
		<input id="audioType" value="local" type="hidden"/>
	</form>
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<p><img id="logo" src="img/logo.png" alt="RPi White Noise Logo"/></p>
		</div>
	</div>

	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			<!-- This is where the alert messages are kept !-->
			<div id="output">
				<?php 
					if( empty( $login ) ){
						$failed = new Message();
						echo $failed->printMessage( 'Can\'t connect to RPi, check your settings file', 'danger' ); 
					}
				?>
			</div>

			<div class="col-md-4">				
				<h2>Audio output</h2>
				<p>Use this to select the audio output, by default it's set up to use audio jack, if you switch you'll have to restart the track.</p>
				<button type="button" class="btn btn-primary" id="hdmi">HDMI</button>
				<button type="button" class="btn btn-primary" id="audiojack">Audio Jack</button>
			</div>

			<div class="col-md-4">
				<h2>Song Selector</h2>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="btn-group btn-input clearfix">
							<select id="dropdown" class="form-control">
								<?php
									$dir = glob('files/*');
									
									// Check if there's any files there
									if ( !empty($dir) ) {
										//If there is, strip the extension/path and include it
										foreach (glob("files/*") as $filename) {
											$fixedName = ucfirst(pathinfo( $filename, PATHINFO_FILENAME ));
											echo("<option value=\"$filename\">$fixedName</option>");
										}
									} else {
										//If not provide some instructions
										echo("<option disabled='disabled'>No files found in the 'files' folder</option>");
									}
								?>
							</select>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<h2>Controls</h2>
				<p>
					<button class="btn btn-default" id="restart" >
						<span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>
					</button>
					<button class="btn btn-default" id="play">
						<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
					</button>
					<button class="btn btn-default" id="stop" >
						<span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
					</button>
				</p>
				<p>
					<button class="btn btn-default" id="volumedown">
						<span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span>
					</button>
					<button class="btn btn-default" id="volumemute">
						<span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span>
					</button>
					<button class="btn btn-default" id="volumeup">
						<span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
					</button>
				</p>
			</div>
		</div>
	<hr>

      	<footer>
       		<p>&copy; Adam Wilson 2015</p>
      	</footer>
    </div> <!-- /container -->
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/ajax-load.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropdown.js"></script>
  </body>
</html>