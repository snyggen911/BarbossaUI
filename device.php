
<?php
echo "Last checked: " . date('H:i:s') . "<br>";
$stringxd = shell_exec("adb devices");
$replaced = str_replace("List of devices attached", "", $stringxd);

$stringxd2 = shell_exec("fastboot devices");

if(trim($replaced) == "") {
	echo "<font color='red'>[ADB] Device not found (ADB).</font><br>";
} else {
echo "<font color='green'>[ADB] Found Device. (".$replaced.")</font><br>";
}

if(trim($stringxd2) == "") {
	echo "<font color='red'>[FTB] Device not found (FTB).</font><br>";
} else {
echo "<font color='green'>[FTB] Found Device. ( ".$stringxd2.")</font><br>";
}

if(trim($replaced) == "" && trim($stringxd2) == "") {
	echo "<font color='orange'>[INFO] Probably not plugged in/booting/off or in recovery mode.</font>";
}
?>
