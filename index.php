<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Audio output</h2>
		  <p>Use this to select the audio output, by default it's setup to use HDMI, you can switch between the two dynamically.</p>
          <button type="button" class="btn btn-primary">HDMI</button>
		  <button type="button" class="btn btn-primary">Audio Jack</button>
        </div>
        <div class="col-md-4">
          <h2>Song Selector</h2>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="btn-group btn-input clearfix">
						<button type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown">
							<span data-bind="label">Select One</span>&nbsp;<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<?php
								$dir = glob('files/*');
								
								// Check if there's any files there
								if ( !empty($dir) ) {
									//If there is, strip the extension/path and include it
									foreach (glob("files/*") as $filename) {
										$fixedName = ucfirst(pathinfo( $filename, PATHINFO_FILENAME ));
										print("<li><a href=\"#\">" . $fixedName . "</a></li>");
									}
								} else {
									//If not provide some instructions
									print("<li class=\"disabled\"><a href=\"#\">Place audio files into the 'files' folder</a></li>");
								}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<h2>Controls</h2>
			<p>
				<button class="btn btn-default">
					<span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>
				</button>
				<button class="btn btn-default">
					<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
				</button>
				<button class="btn btn-default">
					<span class="glyphicon glyphicon-pause" aria-hidden="true"></span>
				</button>
			</p>
			<p>
				<button class="btn btn-default">
					<span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span>
				</button>
				<button class="btn btn-default">
					<span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span>
				</button>
				<button class="btn btn-default">
					<span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
				</button>
			</p>
		</div>
      </div>

      <hr>

      <footer>
        <p>&copy; Adam Wilson 2014</p>
      </footer>
    </div> <!-- /container -->
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropdown.js"></script>
  </body>
</html>