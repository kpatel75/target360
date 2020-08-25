<?php
	 $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  
  $email_from = 'komal.patel121@yahoo.com';
  $email_subject = "Message";
  $email_body = "You have received a new message from Komal Patel\n\n". 
                            "Name: $name.\n".
                            "Email: $visitor_email.\n\n".
                            "Message: $message.\n";

  $to = "komalpatel14292@gmail.com, komal.patel121@yahoo.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  

  mail($to,$email_subject,$email_body,$headers);

  header('Location: contact-us.html');
?>