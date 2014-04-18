<h2>Download and unzip Lakka</h2>

<p>This step is independant of your OS choice, the downloaded image can be used on any OS.</p>
<p>However, the image is specific to the target hardware, as its name should reflect it.</p>

<?php
	if ($_GET['platform'] == "rpi") {
		echo "<p class=\"dl\"><a href=\"https://github.com/lakkatv/Lakka/releases/download/2014-03-10/Lakka-RPi-Lakka.arm-devel-20140310093345-r17679-g0a5d263.img.gz\">Download Lakka <span class=\"details\">for Raspberry Pi ~ 85MB</span></a></p>";
	} elseif ($_GET['platform'] == "pc") {
		echo "<p>Choose one of the following images depending on your PC architecture.</p>";
		echo "<p class=\"dl\"><a href=\"\">Download Lakka <span class=\"details\">for PC 32 bits ~ 135MB</span></a></p>";
		echo "<p class=\"dl\"><a href=\"\">Download Lakka <span class=\"details\">for PC 64 bits ~ 135MB</span></a></p>";
	} else {
		echo "<p>Sorry, the platform you choose is not supported yet.</p>";
	}

	if ($_GET['os'] == "windows") {
		echo "<p>On Windows, please use <a href=\"http://www.7-zip.org\">7zip</a> to unzip Lakka.</p>";
	} elseif ($_GET['os'] == "macos") {
		echo "<p>On MacOS, you just have to double click on the downloaded archive to unzip Lakka.</p>";
	} elseif ($_GET['os'] == "linux") {
		echo "<p>On Linux, you can use the command line tool gunzip to extract Lakka.</p><p>Alternatively, your desktop environment is supposed to provide a graphical way to unzip.</p>";
	}
?>
