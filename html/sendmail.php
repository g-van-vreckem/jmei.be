<?php
/*
 * Template Name: sendmail.php
 */
$fromName = 'JMei';
$fromEmail = 'noreply@jmei.be';
$to = 'info@jmei.be,mpiraprez@msn.com';
$msg_replyToName=  'Annonymous';
$msg_replyToEmail= 'noreply@jmei.be';
$msg_text=  '';
$msg_lang=  'en';
$msg_reason='';
$msg_phone='';

if ( isset( $_REQUEST["name"] ) ) $msg_replyToName =  $_REQUEST["name"];
if ( isset( $_REQUEST["email"] ) ) $msg_replyToEmail = $_REQUEST["email"];
if ( isset( $_REQUEST["message"] ) ) $msg_text = $_REQUEST["message"];
if ( isset( $_REQUEST["lang"] ) ) $msg_lang = $_REQUEST["lang"];
if ( isset( $_REQUEST["reason"] ) ) $msg_reason = $_REQUEST["reason"];
if ( isset( $_REQUEST["phone"] ) ) $msg_reason = $_REQUEST["phone"];

function validateEmail( $email ) {
	return filter_var( $email, FILTER_VALIDATE_EMAIL );
}
if ( $msg_text ) {
	$sec_replyToName = trim(preg_replace('/[:@<>\\/\r\n]+/', '', $msg_replyToName));
	$sec_replyToEmail = stripslashes($msg_replyToEmail);
	$sec_text = stripslashes($msg_text); 
	$sec_reason = stripslashes($msg_reason); 
	$site = $_SERVER['HTTP_HOST'];
	$from = mb_encode_mimeheader($fromName, "UTF-8", "B") . ' <' . $fromEmail . '>';
	$replyTo = mb_encode_mimeheader($sec_replyToName, "UTF-8", "B") . ' <' . $sec_replyToEmail . '>';
	$subject = '[' . $site . '] - ' . $sec_reason . ' - ' . date('Y-m-d H:i');
	$mimeSubject = mb_encode_mimeheader($subject, "UTF-8", "B");
	$message = <<<BODY
Message from your website {$site}

Name: {$msg_replyToName}

Email: {$msg_replyToEmail}

Phone: {$msg_phone}

Message: 
$msg_text
BODY;
	$message = str_replace("\r\n", "\n", $message);
	// Build $headers Variable
	$headers = '';
	$headers .= "MIME-Version: 1.0 \n"; 
	$headers .= "Content-Type: text/plain; charset=UTF-8 \n"; 
	$headers .= "From: $from \n";
	$headers .= "Reply-To: $replyTo \n";
	$to = "$to";
	//send email
	ini_set('sendmail_from', $from);

	$msgCount = mail($to, $mimeSubject, $message, $headers);

	//echo '<pre>' . htmlentities($headers) . '</pre>';
	//echo '<pre>' . htmlentities($mimeSubject) . '</pre>';
	//echo '<pre>' . htmlentities($message) . '</pre>';
	//$msgCount = false;
	switch($msg_lang) {
		case 'fr':
			if ($msgCount === false) {
				$URLsubject = rawurlencode($subject);
				$URLmessage = rawurlencode($msg_text);
				echo "<p class='text-warning'>Nous n'avons pas pu envoyé votre message, Utilisez ce bouton:</p><p><a class='btn' href='mailto:{$to}?subject={$URLsubject}&amp;body={$URLmessage}'>Contactez Nous</a></p>";
			} else {
				echo '<p><b>Votre message a été envoyé, nous vous contacterons dès que possible.<br>Merci.</b></p>';
			}
			break;
		default:
			if ($msgCount === false) {
				$URLsubject = rawurlencode($subject);
				$URLmessage = rawurlencode($msg_text);
				echo "<p class='text-warning'>We had a problem sending your email, try this button instead:</p><p><a class='btn' href='mailto:{$to}?subject={$URLsubject}&amp;body={$URLmessage}'>Contact Us</a></p>";
			} else {
				echo '<p><b>Your message has been sent, we will contact you as soon as possible.<br>Thank you.</b></p>';
			}
	}
} else {
	echo '<p class="text-warning"><b>Error:</b> no message to send</p>';
}
