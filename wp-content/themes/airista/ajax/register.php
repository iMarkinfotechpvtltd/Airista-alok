<?php

include('../../../../wp-config.php');

global $wpdb;
$siteurl=get_site_url(); 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$region = $_POST['region'];
$country = $_POST['country'];
$state = $_POST['state'];
$number = $_POST['number'];
$date = $_POST['date'];
$admin_email = get_option( 'admin_email' ); 
$url='<a href="http://www.email-ladder.co.uk/?page_id=1505">Here</a>';
require_once ABSPATH.'wp-content/themes/airista/mail/class.phpmailer.php';

$mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch
$mail1 = new PHPMailer(true);
try
{
  $mail->AddAddress($admin_email);
  $mail->Subject = 'New Customer Detail';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $file=ABSPATH.'wp-content/themes/airista/mail/bidAcptLendMail1.php';
  $emailBody = file_get_contents($file);
  $search  = array('[[fname]]','[[lname]]','[[email]]','[[number]]','[[company]]','[[phone]]','[[region]]','[[country]]','[[state]]','[[date]]');
  $replace = array($fname, $lname, $email,$number,$company ,$phone ,$region ,$country ,$state ,$date); 
	
  $emailBody  = str_replace($search, $replace, $emailBody);
  $mail->MsgHTML( $emailBody );
  $mail->Send(); 

	 
	  $mail1->AddAddress($email);
	  $mail1->Subject = 'Response email from Admin';
	  $mail1->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $file=ABSPATH.'wp-content/themes/airista/mail/cust_mail_templete.php';
  $emailBody = file_get_contents($file);
  $search  = array('[[fname]]','[[lname]]','[[fname]]','[[email]]','[[number]]','[[company]]','[[phone]]','[[region]]','[[country]]','[[state]]', '[[date]]');
  $replace = array($fname,$lname, $email,$number,$company,$phone,$region,$country,$state,$date,$siteurl); 
	
  $emailBody  = str_replace($search, $replace, $emailBody);
  $mail1->MsgHTML( $emailBody );
  $mail1->Send(); 	  
  
}
catch (phpmailerException $error) 
{
$error->errorMessage(); //Pretty error messages from PHPMailer
}
catch (Exception $c) 
{
$c->getMessage(); //Boring error messages from anything else!
}
echo "1";
?>



