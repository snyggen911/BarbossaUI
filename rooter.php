<h2>Control Panel</h2>
<hr>
<h3>Device Check</h3>
<script>
$(function() {
    function callAjax(){
        $('#deviceChecker').load("/device.php");
    }
    setInterval(callAjax, 1000);
});
</script>
<div id="deviceChecker"> </div>
<div class="panel panel-danger" id="adb">
            <div class="panel-heading">
              <h3 class="panel-title">ADB</h3>
            </div>
            <div class="panel-body">
              <form action="#adb" method="POST">
			  <p>Booting</p>
			  <input type="submit" name="bootBootloader" class="btn btn-success" value="Boot Bootloader">
			  <input type="submit" name="bootReboot" class="btn btn-success" value="Reboot Z3">
			  <input type="submit" name="bootPoweroff" class="btn btn-success" value="Power Off Z3">
			  <input type="submit" name="bootRecovery" class="btn btn-success" value="Boot Recovery (IF Exists)">
			  <input type="submit" name="bootFactory" class="btn btn-success" value="Factory Reset">
			  <hr>
			  
			  <p>Flash</p>
			  <input type="submit" name="flashTest" class="btn btn-danger" value="Flash SuperSU">
			  <input type="submit" name="flashSideload" class="btn btn-danger" value="Flash Sideload SuperSU">
			  </form>
			  <?php
			  // ADB.
			  $device = shell_exec("adb devices");
			  $replaced = str_replace("List of devices attached", "", $device);
			  
			  if(isset($_POST["bootBootloader"])) {
				if(trim($replaced) == "") {
					echo "Device not found.";
				} else {
					echo "You are now in bootloader mode.";
					shell_exec("adb reboot bootloader");
				}
			  }
			  
			  if(isset($_POST["bootFactory"])) {
				if(trim($replaced) == "") {
					echo "Device not found.";
				} else {
					echo "Factory resetting phone...";
					shell_exec("adb shell am broadcast -a android.intent.action.MASTER_CLEAR");
				}
			  }
			  
			  if(isset($_POST["bootPoweroff"])) {
				if(trim($replaced) == "") {
					echo "Device not found.";
				} else {
					echo "You are now in bootloader mode.";
					shell_exec("adb shell reboot -p");
				}
			  }
			  
			  if(isset($_POST["bootReboot"])) {
				if(trim($replaced) == "") {
					echo "Device not found.";
				} else {
					echo "Rebooting Z3...";
					shell_exec("adb reboot");
				}
			  }
			  
			  if(isset($_POST["bootRecovery"])) {
				if(trim($replaced) == "") {
					echo "Device not found.";
				} else {
					echo "You are now in recovery mode.";
					shell_exec("adb reboot recovery");
				}
			  }
			  
			  if(isset($_POST["flashTest"])) {
			  
				if(trim($replaced) == "") {
					echo "Device not found.";
				} else {
					shell_exec("adb push SuperSU.zip /sdcard/Download/");
					echo "Pushing SuperSU file to sdcard/download.";
				}
			  
			  }
			  
			  if(isset($_POST["flashSideload"])) {
			  
				if(trim($replaced) == "") {
					echo "Device not found.";
				} else {
					shell_exec("adb sideload SuperSU.zip");
					echo "Sideloading SuperSU.";
				}
			  
			  }
			 
			  ?>
            </div>
</div>
<div class="panel panel-success" id="fastboot">
            <div class="panel-heading">
              <h3 class="panel-title">Fastboot</h3>
            </div>
            <div class="panel-body">
              <form action="#fastboot" method="POST">
			  <p>Booting</p>
			  <input type="submit" name="bootback" class="btn btn-success" value="Boot back">
			  <hr>
			  
			  <p>Flash</p>
			  <input type="submit" name="flashrecovery" class="btn btn-danger" value="Flash Recovery">
			  </form>
			  <?php
			  // Fastboot.
			  $stringFASTBOOT = shell_exec("fastboot devices");
			  $fastbootError = "You can only perform this action if you are in the bootloader.";
				if(isset($_POST["bootback"])) {
					if(trim($stringFASTBOOT) == "") {
						echo $fastbootError;
					} else {
						shell_exec("fastboot reboot");
						echo "Rebooting phone.";
						header("Refresh:3;index.php");
					}
				}
				
				
				if(isset($_POST["flashrecovery"])) {
					if(trim($stringFASTBOOT) == "") {
						echo $fastbootError;
					} else {
						Sleep(10);
						shell_exec("fastboot flash boot recoveryZ32.img");
						Sleep(15);
						shell_exec("fastboot reboot");
						echo "Flashing... expected to be finished in 25 seconds.";
					}
				}
				
			  ?>
            </div>
</div>
<iframe width="0" height="0" src="https://www.youtube.com/embed/aH5aq4V0Ywk?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>