<?php


if (defined('PHPMAILER_LOADED'))
	return;


Laravel\Autoloader::map(array(
	'PHPMailer' => Bundle::path('phpmailer').'lib/class.phpmailer.php',
));


// Register a mailer in the IoC container
Laravel\IoC::singleton('mailer', function()
{

	$mailer = new PHPMailer();

	$mailer->PluginDir = Bundle::path('phpmailer').'lib';

	$mailer->SetFrom( Config::get('phpmailer::from'), Config::get('phpmailer::from_name'));

	return $mailer;

});



define('PHPMAILER_LOADED', true);
