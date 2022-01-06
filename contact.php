<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

  $mail = new PHPMailer(true);

  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'wupeannouncement@gmail.com';
      // Gmail Password
      $mail->Password = 'Jaonforever13';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('jandelmarsh27@gmail.com','WUP Aurora ');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('wupeannouncement@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body = "
      <h3>Name : $name </h3> 
      <h4>
      <br>Message : $message
      <br>
      <br> From Email : $email

      </h4>";
      

      $mail->send();
      $output = '<div class="alert alert-success">
                  <h5>Thankyou for contacting the support team, Well get back to you soon!</h5>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }


?>

<div class="container center div">
      <div id="myForm" >

                <?= $output;
                 ?>
              <form action="" method="POST">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name" required>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail" required>
                  </div>
                </div>
                <div class="form-group">
                   <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject"
                  required>
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Inquiries."
                  required></textarea>
                </div>
                <div class="text-center"><input type="submit" name="submit" value="Send" class="btn btn-success btn-block" id="sendBtn"></div>
              </form>
            </div>
          </div>

