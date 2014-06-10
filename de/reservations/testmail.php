<?php

/* Empfänger */
$empfaenger = 'ffittschen@gmail.com';

/* Absender */
$absender = 'info@ferienwohnung-wimberger.de';

/* Betreff */
$subject = 'Testmail mit PHP';

/* Nachricht */
$message = 'Hallo Welt!';

/* Baut Header der Mail zusammen */
$header = ('From: ' . $absender . ' \n');
$header .= ('Reply-To: ' . $absender . ' \n');
$header .= ('Return-Path: ' . $absender . ' \n');
$header .= ('X-Mailer: PHP/' . phpversion() . ' \n');
$header .= ('X-Sender-IP: ' . $REMOTE_ADDR . ' \n');
$header .= ('Content-type: text/html \n');

/* Verschicken der Mail */
mail($empfaenger, $subject, $message, $header, '-f info@ferienwohnung-wimberger.de');

echo 'Die E-Mail wurde versendet.';

?>