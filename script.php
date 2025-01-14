<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name=$_POST['name'];
$email = $_POST['email'];
$about_project=$_POST['about_project'];
$subject="Kailash Solanki Portfolio Contact Form";
$body="Name : $name \n
Email: $email \n
About Project: $about_project";


require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php ';
require 'PHPMailer\Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail -> isSMTP();
$mail -> SMTPAuth=true;
$mail -> Host = "smtp.gmail.com";
$mail -> SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS;
$mail -> Port=587;

$mail -> Username = 'solanki.kailash.3112@gmail.com';
$mail -> Password = 'bakh mzsd iiqd xglg';

$mail -> setFrom($email,$name);
$mail -> addAddress('solanki.kailash.3112@gmail.com','Kailash Solanki');

$mail -> Subject=$subject;
$mail -> Body = $body;

if($mail-> send()){
    echo "<script>alert('Thank you, $name. Your message has been sent successfully.');</script>";
}
else{
    echo "<script>alert('Sorry, there was a problem sending your message. Please try again.');</script>";
}
?>