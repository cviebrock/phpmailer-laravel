<?php

// Configure the autoloader

Autoloader::map(array(
	'PHPMailer' => Bundle::path('phpmailer').'lib'.DS.'class.phpmailer.php',
));


// Register a mailer in the IoC container
IoC::register('phpmailer', function()
{

	// Instantiate a new PHPMailer.  Passing 'true' to the constructor
	// means that exceptions are thrown on errors, which you can
	// catch in your application.

	$mailer = new PHPMailer(true);


	// set the default plugin dir for the instance

	$mailer->PluginDir = Bundle::path('phpmailer').'lib'.DS;


	// Load the default settings, if they exist.

	$config = Config::get('phpmailer::phpmailer', array());

	foreach( $config as $key => $value ) {
		if (is_null($value)) {
			$mailer->{$key}();
		} else if (is_array($value)) {
			call_user_func_array(array($mailer, $key), $value);
		} else {
			$mailer->{$key} = $value;
		}
	}

	// Return the instance.

	return $mailer;

});
