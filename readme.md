# PHPMailer Bundle, by Colin Viebrock

A Laravel PHPMailer bundle, installable via the Artisan CLI:

	php artisan bundle:install phpmailer

To get a PHPMailer instance:

	$mailer = IoC::resolve('mailer');

Then, use it just like you normally might:

	$mailer->Subject  = "Laravel Rocks";
	$mailer->Body     = "Hi! Laravel is awesomesauce!";

	if(!$mail->Send()) {
		echo 'Message was not sent.';
		echo 'Mailer error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent.';
	}

The default "From:" address can be set in the configuration file.


# PHPMailer - Full Featured Email Transfer Class for PHP

Version 5.2.1 (January 16, 2012)

- Homepage: https://code.google.com/a/apache-extras.org/p/phpmailer/
