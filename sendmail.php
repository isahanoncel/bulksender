<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require 'function.php';
require 'config.php';
if(isset($_POST["message"]) and isset($_POST["subject"]) and isset($_POST["altbody"])){
  $message=clear($_POST["message"]);
  $subject=clear($_POST["subject"]);
  $altbody=clear($_POST["altbody"]);
  if(IsNullOrEmptyString($message)){echo "<div class='alert alert-danger text-center' style='width:100%;'>Message is null.</div>";exit;}
  if(IsNullOrEmptyString($subject)){echo "<div class='alert alert-danger text-center' style='width:100%;'>Subject is null.</div>.";exit;}
  if(IsNullOrEmptyString($altbody)){echo "<div class='alert alert-danger text-center' style='width:100%;'>Altbody is null.</div>.";exit;}
  $mail = new PHPMailer(true);
  try {
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = $sender;
      $mail->Password   = $password;
      $mail->SMTPSecure = 'tls';
      $mail->Port       = 587;
      $mail->setFrom($sender, $name);
      $f_pointer=fopen($csvfile,"r");
    	while(! feof($f_pointer)){
    		error_reporting(0);
    	$ar=fgetcsv($f_pointer);
    	foreach($ar as $v){
    		$email = $v;
    	 if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	  $mail->AddAddress($email , $subject);
    	 }
    	}
    	}
      $mail->isHTML(true);

      $mail->Subject = $subject;

      $mail->Body    = $message;

      $mail->AltBody = $altbody;

      $issent = $mail->send();
      if($issent){
        echo "<div class='alert alert-success text-center' style='width:100%'>Mail has been sent successfully.</div>";
      }

  } catch (Exception $e) {
      echo "<div class='alert alert-danger text-center' style='width:100%;'>{$mail->ErrorInfo}"."</div>";
  }

}
/*

@2019 For Github İsahan ÖNCEL

*/
?>
