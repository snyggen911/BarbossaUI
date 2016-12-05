<html>
<head>
<title>Barbossa's PlayGround [BETA]</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

<!-- Fixed navbar -->

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Barbossa</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home">Home</a></li>
			<li><a href="#adb">ADB</a></li>
			<li><a href="#fastboot">Fastboot</a></li>
            <li><a href="downloads.php">Downloads</a></li>
            <li><a href="credits.php">Credits</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- end -->

	
 <div class="container theme-showcase" role="main">
	<div class="jumbotron">
	<div class="page-header">
	<?php
	if($_SERVER["SERVER_ADDR"] == $_SERVER["REMOTE_ADDR"]) {
		include("rooter.php");
		
	} else {
		echo "<h2>Permission Denied.</h2><p>You do not have access to view this page.</p><hr>";
		echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/aH5aq4V0Ywk?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>';
	}
	?>
</div>
</div>
<div class="page-header">
        <h1>About</h1>
      </div>
	  <div class="well">
        <p><?php if($_SERVER["SERVER_ADDR"] != $_SERVER["REMOTE_ADDR"]) {
			echo "SWING BABY, SWING!";
		} else {
			echo "Site created 2016-12-04 @ 20:44 EST Time.";
		}
		?></p>
      </div>
</div>


</body>
</html>