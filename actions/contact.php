<?php
	$name = $_POST["contact-name"];
	$email = $_POST["contact-email"];
	$subject = $_POST["contact-subject"];
	$message = $_POST["contact-message"];
	$mail_to = "bruno.santos1996@gmail.com";
	
	$body_message = "From: ".$name."\n"."Email: ".$email."\n"."Message: ".$message;
	
	$mail_sent = mail($mail_to, $subject, $body_message);
	
	if ($mail_sent) {
		echo "
		<script>
			alert('Email sent successfuly.');
			window.location='../index.html#contact';
		</script>";
	}
	else {
		echo "
		<script>
			alert('Email couldn't be sent.');
			window.location='../#contact';
		</script>";
	}
?>