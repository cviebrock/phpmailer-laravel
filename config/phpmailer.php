<?php

/**
 * Default Configuration
 *
 * For every option that is set here, if the value isn't null,
 * then that setting will be passed to the constructor when
 * starting a new mailer.
 *
 * For example, if the configuration contains:
 *
 *   array(
 *     'From'   => 'laravel@example.com',
 *     'IsSMTP' => true,
 *     'Host'   => 'smtp@example.com',
 *   )
 *
 * that would be equivalent to running this when starting
 * a new mailer instance:
 *
 *   $mailer->From = 'laravel@example.com';
 *   $mailer->IsSMTP();
 *   $mailer->Host = 'smtp@example.com';
 *
 * Sadly, this only works for settings that take no arguments
 * (like "IsSMTP"), or single arguments.  Suggestions on how
 * to better handle this are welcome!
 */

return array(
	'From'     => 'phpmailer-laravel@example.com',
	'FromName' => 'PHPMailer Laravel Bundle',
);