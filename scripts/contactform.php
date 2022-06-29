
<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $to = "jamesmccorkindale@jamesmccorkindale.co.uk";
    $subject = "Contact Form on Website";
    $message = "Name: " . $_POST['name'] . "\n\n" . "Message: " . $_POST['message'];
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
        echo "The email message was sent.";
    } else {
        echo "The email message was not sent.";
    }
    
    header('Location:../contact-success.php');
    
?>