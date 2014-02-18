<?php
	
	$filename = 'logs/log.html';
	
	if (!is_writable($filename)) {
		echo("Error, cannot write to ($filename).");
		exit();
	}
	
	$fp = fopen($filename, 'a');
	$ip = $_SERVER['REMOTE_ADDR'];
	$agent = $_SERVER['HTTP_USER_AGENT'];
	$visitTime = date("M d, h:i A");
	
	// $logData = "<tr><td>$visitTime</td><td> IP: $ip</td><td>User Agent: $agent</td><br>";
	$lineOne = "<b><center>~~~~~~~~~~~~~~ $visitTime ~~~~~~~~~~~~~~</b><br>\n";
	$lineTwo = "<b>User IP</b>: ($ip)<br>\n";
	$lineThree = "<b>Agent</b>: ($agent)<br><br></center>\n";
	
	fwrite($fp, $lineOne);
	fwrite($fp, $lineTwo);
	fwrite($fp, $lineThree);
	
	fclose($fp);
	
	header( 'Location: http://google.com/' ) ;
?>