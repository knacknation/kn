<?php
$field_name = $_POST['Name'];
$field_email = $_POST['Email'];
$field_subject = $_POST['Subject'];
$field_message = $_POST['Message'];

$mail_to = 'contact@knacknation.club';
$subject = 'Contact Form'.$field_subject;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'E-mail: '.$field_subject."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly if needed.');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to contact@knacknation.club');
		window.location = 'contact.html';
	</script>
<?php
}
?>
