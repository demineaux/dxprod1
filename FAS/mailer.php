<?php

	$emailTo = "";

	$subject = "";

	$body = "";

	$headers = "From: ";

	if (mail($emailTo, $subject, $body, $headers)){

		echo "The e-mail was sent successfully.";

	}  else {

		echo "The e-mail could not be sent.";
	}

?>