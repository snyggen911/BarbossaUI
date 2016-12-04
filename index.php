<html>
<head>
<title>Barbossa's PlayGround [BETA]</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
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
            <li><a href="downloads.php">Downloads</a></li>
            <li><a href="credits.php">Credits</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 <div class="container theme-showcase" role="main">
	<div class="jumbotron">
<h2>Welcome to <i>Barbossa's PlayGround</i>. [<font color="green">BETA</font>] :)</h2>
<em>For Xperia Z3</em>
<div class="alert alert-info" role="alert">
<strong>HALT!!!</strong><br>
Before you start playing with this tool! Make sure you have downloaded your Xperia Z3 CyanogenMod.<br>
Once that's done, transfer it to sdcard.
<br>
Don't know where to get supersu? Click there -> <a href="https://download.chainfire.eu/696/supersu/" target="_blank">https://download.chainfire.eu/696/supersu/</a>
</div>
<p>Before we start!<br>
Make sure your OEM is unlocked.<br>
Click later on Check device and see if it give's you an output.<br>
If not, you may have to install Xperia Z3 drivers. (Note: Check devices does only work<br>
if your phone is in bootloader mode.</p>
<form action="" method="POST">
<input class="btn btn-success" type="submit" name="reboot" value="Reboot Z3" />
<input class="btn btn-success" type="submit" name="bootloader" value="Boot into Bootloader" />
<input class="btn btn-success" type="submit" name="frombootloader" value="Boot back (from bootloader). "/>
<input class="btn btn-success" type="submit" name="bootrecovery" value="Boot to Recovery (If exists)"/><br><br>
<input class="btn btn-warning" type="submit" name="flashrecovery" value="Flash Recovery + (Boot into Bootloader)"/><br><br>
<input class="btn btn-danger" type="submit" name="flashrecoveryx" value="Flash Recovery (Bootloader)"/> Only do this action if you already are in the bootloader.<br>
To get into bootloader manually, hold down the <b>VOLUME UP</b> button and plug in the cable to your phone.<br>
<input class="btn btn-info" type="submit" name="vardump" value="Check device"/>
</form>

<?php
if(isset($_POST["reboot"])) {
shell_exec("adb reboot");
} else if(isset($_POST["bootloader"])) {
shell_exec("adb reboot bootloader");
} else if(isset($_POST["frombootloader"])) {
shell_exec("fastboot reboot");
} else if(isset($_POST["flashrecovery"])) {
shell_exec("adb reboot bootloader"); // Reboot's the phone into bootloader mode.
Sleep(15); // Wait's 15 seconds before next action.
shell_exec("fastboot flash boot recoveryZ32.img"); // Flashing the recovery.
Sleep(10); // Wait's another 10 seconds before we can do the reboot. Just to ensure the recovery has been flashed.
shell_exec("fastboot reboot"); // And now we just reboot our phone :)
}  else if(isset($_POST["flashrecoveryx"])) {
shell_exec("fastboot flash boot recoveryZ32.img"); // Flashing the recovery.
Sleep(10); // Wait's another 10 seconds before we can do the reboot. Just to ensure the recovery has been flashed.
shell_exec("fastboot reboot"); // And now we just reboot our phone :)
} else if(isset($_POST["vardump"])) {
echo shell_exec("fastboot devices");
} else if(isset($_POST["bootrecovery"])) {
shell_exec("adb reboot recovery");
}
?>

<div class="alert alert-danger" role="alert">
<strong>Eh-Hum!!!</strong><br>
I am not responsible for your actions, you decided to do this<br>
not me.
</div>
</div>
</div>

</body>
</html>