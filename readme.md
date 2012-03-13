# PHPMailer Bundle, by Colin Viebrock

A Laravel PHPMailer bundle, installable via the Artisan CLI:

	php artisan bundle:install phpmailer

To get a PHPMailer instance:

	$mailer = IoC::resolve('mailer');

Or, since your controllers have dynamic access to the IoC container:

	$this->mailer->send($message);


# PHPMailer - Full Featured Email Transfer Class for PHP

Version 5.2.1 (January 16, 2012)

- Homepage:      https://code.google.com/a/apache-extras.org/p/phpmailer/
