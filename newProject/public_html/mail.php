
<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submitted'])){
  $email = $_POST['email'];
  $title = $_POST['title'];
  $comment = $_POST['comment'];

  
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username   = 'p20012398@student.newinti.edu.my';                     //SMTP username
    $mail->Password   = 'jrbggwlluwqsjiny';  
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->isHTML(true);
    $mail->setFrom($email); //sender
    $mail->addAddress('p20012398@student.newinti.edu.my'); //receiver

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Title: $title <br>Comment : $comment<br> email: $email</h3>";

    if( $mail->send()){
       $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
   header('Location: homepage.html' ); 
    }else{
         $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
    }
   
}
?>