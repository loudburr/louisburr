<?php

if (isset($POST['submit'])) {
	$name = $POST['name'];
	$subject = $POST['subject'];
	$mailFrom = $POST['mail'];
	$message = $POST['message'];

	$mailTo = "louis.burr@hotmail.co.uk";
	$headers = "From: ". $mailFrom;
	$txt = "You have received an e-mail from" .$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers); 
	header("Location: index.html?mailsend");