<?php
	 $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  
  $email_from = 'info@target360.media';
  $email_subject = "Target360.media";
  $email_body = "You have received a new message from the Target360.media\n\n". 
                            "Name: $name.\n".
                            "Email: $visitor_email.\n\n".
                            "Message: $message.\n";

  $to = "komalpatel14292@gmail.com, komal.patel121@yahoo.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  

  mail($to,$email_subject,$email_body,$headers);

  header('Location: contact-us.html');
?>