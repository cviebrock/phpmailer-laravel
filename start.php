<?php


Autoloader::map(array(
	'PHPMailer' => Bundle::path('phpmailer').'lib'.DS.'class.phpmailer.php',
));


// Register a mailer in the IoC container
IoC::singleton('mailer', function()
{

	$mailer = new PHPMailer();
	$mailer->PluginDir = Bundle::path('phpmailer').'lib';

	$config = Config::get('phpmailer::phpmailer', array());

	foreach( $config as $key => $value ) {
		if ($value===true) {
			$mailer->{$key}();
		} else {
			$mailer->{$key}($value);
		}
	}

	return $mailer;

});
