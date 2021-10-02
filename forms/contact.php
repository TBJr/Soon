<?php
    /**
    * Requires the "PHP Email Form" library
    * The library should be uploaded to: vendor/php-email-form/php-email-form.php
    */
    
    $receiving_email_address = 'backendbackbonner@outlook.com';

    if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
        include( $php_email_form );
    } else {
        die( 'Unable to load the "PHP Email Form" Library!');
    }

    $contact = new PHP_Email_Form;
    $contact->ajax = true;

    $contact->to = $receiving_email_address;
    $contact->from_name = $_POST['name'];
    $contact->form_email = $_POST['email'];
    $contact->subject = $_Post['subject'];

    $contact->smtp = array(
        'host' => 'luxdental.gm',
        'username' => 'noreply@luxdental.gm',
        'password' => 'KDdkZa.n?9Jo',
        'port' => '465'
    );
    
    $contact->add_message($_POST['name'], 'Form');
    $contact->add_message($_POST['email'], 'Email');
    $contact->add_message($_POST['message'], 'Message', 10);

    $contact->honeypot = $_POST['first_name'];

    if($_POST['privacy'] !='accept') {
        die('Please, accept our terms of service and privacy acy policy');
    }

    $contact->cc = array('info@luxdental.gm', 'backendbackbonner@outlook.com');

    echo $contact->send();
?>