<html>
<head>
<title>Barbossa's PlayGround [BETA]</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <li><a href="index.php">Home</a></li>
            <li  class="active"><a href="#downloads">Downloads</a></li>
            <li><a href="credits.php">Credits</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="container theme-showcase" role="main">
		<div class="jumbotron">
		<div class="page-header">
		<h2>Downloads</h2>
		<hr>
		<p>There isn't really much to download here... so... yeah.<br>
		<li><a href="https://download.cyanogenmod.org/?device=z3" target="_blank">https://download.cyanogenmod.org/?device=z3</a></li><br>
		Good OS, aswell as the Recovery.
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