<?php
	$to = "martys@oregonstate.edu";
	$subject = "Item Request: " . $_GET['itemName'];
	$message = "Item Description:\n" . $_GET['itemDescription'] . "\nOther Comments:\n" . $_GET['otherComments'];
	mail($to, $subject, $message);

	header("Location: index.html");
?>