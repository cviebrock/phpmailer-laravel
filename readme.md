# PHPMailer Bundle, by Colin Viebrock

A Laravel PHPMailer bundle, installable via the Artisan CLI:

    php artisan bundle:install phpmailer

Add it to `application/bundles.php`:

    return array(
        ...
        'phpmailer' => array(
            'auto'  => true
        ),
        ...
    );

To get a PHPMailer instance:

    $mailer = IoC::resolve('phpmailer');

Then, use it just like you normally might:

    try {
        $mailer->AddAddress( $user->email, $user->name );
        $mailer->Subject  = "Laravel Rocks";
        $mailer->Body     = "Hi! Laravel is awesomesauce!";
        $mailer->Send();
    } catch (Exception $e) {
        echo 'Message was not sent.';
        echo 'Mailer error: ' . $e->getMessage();
    }

The default "From:" address -- among other settings -- can be defined in the configuration file.

* * *

Includes *PHPMailer - Full Featured Email Transfer Class for PHP*

- Version: 5.2.1 (January 16, 2012)
- Homepage: https://code.google.com/a/apache-extras.org/p/phpmailer/
